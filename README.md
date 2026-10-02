Contains php sources to test the SonarPhp analyzer: https://github.com/SonarSource/sonar-php.

## Project layout

Each test project is stored at the repository root in a directory named after its ruling-test project key:
`PHPMailer`, `PHPWord`, `PHP_CodeSniffer`, `PhpSpreadsheet`, `RubixML`, `flysystem`, `monica`, and `psysh`.
When this repository is checked out under `its/sources` in `sonar-php`, each project's sources are therefore
available at `its/sources/<project-key>`. The shared `php.ini` is also at the repository root.

## Pre commit hook

It's highly recomended to install pre commit hook to avoid commiting files that are not usefull for PHP analysis.
The cleanup script only processes the test-project directories, leaving repository metadata and documentation intact.

```shell
cat <<EOT > .git/hooks/pre-commit
#!/bin/sh
./clean-before-commit.sh
EOT
```

### License

Copyright 2015-2023 SonarSource.

Licensed under the [GNU Lesser General Public License, Version 3.0](http://www.gnu.org/licenses/lgpl.txt)

