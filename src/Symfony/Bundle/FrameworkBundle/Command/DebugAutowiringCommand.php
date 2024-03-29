<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\Command;

use Symfony\Bundle\FrameworkBundle\Console\Descriptor\Descriptor;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Completion\CompletionInput;
use Symfony\Component\Console\Completion\CompletionSuggestions;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\HttpKernel\Debug\FileLinkFormatter;

/**
 * A console command for autowiring information.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 *
 * @internal
 */
#[AsCommand(name: 'debug:autowiring', description: 'List classes/interfaces you can use for autowiring')]
class DebugAutowiringCommand extends ContainerDebugCommand
{
    private bool $supportsHref;
    private ?FileLinkFormatter $fileLinkFormatter;

    public function __construct(string $name = null, FileLinkFormatter $fileLinkFormatter = null)
    {
        $this->supportsHref = method_exists(OutputFormatterStyle::class, 'setHref');
        $this->fileLinkFormatter = $fileLinkFormatter;
        parent::__construct($name);
    }

    protected function configure(): void
    {
        $this
            ->setDefinition([
                new InputArgument('search', InputArgument::OPTIONAL, 'A search filter'),
                new InputOption('all', null, InputOption::VALUE_NONE, 'Show also services that are not aliased'),
            ])
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command displays the classes and interfaces that
you can use as type-hints for autowiring:

  <info>php %command.full_name%</info>

You can also pass a search term to filter the list:

  <info>php %command.full_name% log</info>

EOF
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $errorIo = $io->getErrorStyle();

        $builder = $this->getContainerBuilder($this->getApplication()->getKernel());
        $serviceIds = $builder->getServiceIds();
        $serviceIds = array_filter($serviceIds, $this->filterToServiceTypes(...));

        if ($search = $input->getArgument('search')) {
            $searchNormalized = preg_replace('/[^a-zA-Z0-9\x7f-\xff $]++/', '', $search);

            $serviceIds = array_filter($serviceIds, fn ($serviceId) => false !== stripos(str_replace('\\', '', $serviceId), $searchNormalized) && !str_starts_with($serviceId, '.'));

            if (!$serviceIds) {
                $errorIo->error(sprintf('No autowirable classes or interfaces found matching "%s"', $search));

                return 1;
            }
        }

        uasort($serviceIds, 'strnatcmp');

        $io->title('Autowirable Types');
        $io->text('The following classes & interfaces can be used as type-hints when autowiring:');
        if ($search) {
            $io->text(sprintf('(only showing classes/interfaces matching <comment>%s</comment>)', $search));
        }
        $hasAlias = [];
        $all = $input->getOption('all');
        $previousId = '-';
        $serviceIdsNb = 0;
        foreach ($serviceIds as $serviceId) {
            if ($builder->hasDefinition($serviceId) && $builder->getDefinition($serviceId)->hasTag('container.excluded')) {
                continue;
            }
            $text = [];
            $resolvedServiceId = $serviceId;
            if (!str_starts_with($serviceId, $previousId)) {
                $text[] = '';
                if ('' !== $description = Descriptor::getClassDescription($serviceId, $resolvedServiceId)) {
                    if (isset($hasAlias[$serviceId])) {
                        continue;
                    }
                    $text[] = $description;
                }
                $previousId = $serviceId.' $';
            }

            $serviceLine = sprintf('<fg=yellow>%s</>', $serviceId);
            if ($this->supportsHref && '' !== $fileLink = $this->getFileLink($serviceId)) {
                $serviceLine = sprintf('<fg=yellow;href=%s>%s</>', $fileLink, $serviceId);
            }

            if ($builder->hasAlias($serviceId)) {
                $hasAlias[$serviceId] = true;
                $serviceAlias = $builder->getAlias($serviceId);

                if ($builder->hasDefinition($serviceAlias) && $decorated = $builder->getDefinition($serviceAlias)->getTag('container.decorator')) {
                    $serviceLine .= ' <fg=cyan>('.$decorated[0]['id'].')</>';
                } else {
                    $serviceLine .= ' <fg=cyan>('.$serviceAlias.')</>';
                }

                if ($serviceAlias->isDeprecated()) {
                    $serviceLine .= ' - <fg=magenta>deprecated</>';
                }
            } elseif (!$all) {
                ++$serviceIdsNb;
                continue;
            } elseif ($builder->getDefinition($serviceId)->isDeprecated()) {
                $serviceLine .= ' - <fg=magenta>deprecated</>';
            }
            $text[] = $serviceLine;
            $io->text($text);
        }

        $io->newLine();

        if (0 < $serviceIdsNb) {
            $io->text(sprintf('%s more concrete service%s would be displayed when adding the "--all" option.', $serviceIdsNb, $serviceIdsNb > 1 ? 's' : ''));
        }
        if ($all) {
            $io->text('Pro-tip: use interfaces in your type-hints instead of classes to benefit from the dependency inversion principle.');
        }

        $io->newLine();

        return 0;
    }

    private function getFileLink(string $class): string
    {
        if (null === $this->fileLinkFormatter
            || (null === $r = $this->getContainerBuilder($this->getApplication()->getKernel())->getReflectionClass($class, false))) {
            return '';
        }

        return (string) $this->fileLinkFormatter->format($r->getFileName(), $r->getStartLine());
    }

    public function complete(CompletionInput $input, CompletionSuggestions $suggestions): void
    {
        if ($input->mustSuggestArgumentValuesFor('search')) {
            $builder = $this->getContainerBuilder($this->getApplication()->getKernel());

            $suggestions->suggestValues(array_filter($builder->getServiceIds(), $this->filterToServiceTypes(...)));
        }
    }
}
