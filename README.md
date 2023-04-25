Contains php sources to test the SonarPhp analyzer: https://github.com/SonarSource/sonar-php.

## Pre commit hook

It's highly recomended to install pre commit hook to avoid commiting files that are not usefull for PHP analysis.

```shell
cat <<EOT > .git/hooks/pre-commit
#!/bin/sh
./clean-before-commit.sh
EOT
```

### License

Copyright 2015-2023 SonarSource.

Licensed under the [GNU Lesser General Public License, Version 3.0](http://www.gnu.org/licenses/lgpl.txt)

