# php-cs-fixer-config

[`PHP CS Fixer`](http://github.com/FriendsOfPHP/PHP-CS-Fixer) config.

## Installation

Run:

```sh
$ composer require --dev fsevestre/php-cs-fixer-config
```

## Usage

### Configuration

Create a configuration file `.php_cs` in the root of your project:

```php
<?php

$config = new FSevestre\CS\Config\PhpXX();

$config->getFinder()
    ->in([
        __DIR__.'/src'
    ])->exclude([
        'tests'
    ])
;

return $config;
```

### Git

Add `.php_cs.cache` (this is the cache file created by `php-cs-fixer`) to `.gitignore`:

```
vendor/
.php_cs.cache
```

### Makefile

Create a `Makefile` with the targets below:

```Makefile
# Coding Style

cs:
	./vendor/bin/php-cs-fixer fix --dry-run --stop-on-violation --diff

cs-fix:
	./vendor/bin/php-cs-fixer fix --verbose

cs-ci:
	./vendor/bin/php-cs-fixer fix --dry-run --using-cache=no --verbose --show-progress=estimating
```

## Fixing issues

If you need to **check** issues locally, run:

```sh
$ make cs
```

If you need to **fix** issues locally, run:

```sh
$ make cs-fix
```

In your Continuous Integration, run:

```sh
$ make cs-ci
```

## Credits

Inspired by [m6web/php-cs-fixer-config](https://github.com/M6Web/php-cs-fixer-config).

## License

This project is licensed under the [MIT license](LICENSE).
