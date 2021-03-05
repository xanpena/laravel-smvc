# Laravel SMVC

This library offers the *SMVC architecture pattern* by adding a data structure layer called *Schema* to the MVC pattern.

Allows *automatic generation of CRUDS* sections without the need to create additional views or controllers.

### Features

### Installation

Go to terminal and run this command

```shell
    composer require xanpena/laravel-smvc
```

### For Laravel

Below **Laravel 6** open `config/app` and add this line in `providers` section

```php
    Xanpena\SMVC\SMVCServiceProvider::class,
```

## Quick Usages


### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please using the issue tracker.

## Credits

- [:Xan Pena](https://github.com/xanpena)

