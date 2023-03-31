# Laravel SMVC

This library offers the **SMVC architecture pattern** by adding a data structure layer called **Schema** to the MVC pattern.

Allows **automatic generation of CRUDS** sections without the need to create additional views or controllers.

### Features

### Installation

Go to terminal and run this command

```shell
    composer require xanpena/laravel-smvc
```

After installing SMVC, publish its assets using the smvc:install Artisan command. 

```shell
    php artisan smvc:install
    php artisan smvc:publish
```

### For Laravel

Below **Laravel 6** open `config/app` and add this line in `providers` section

```php
    Xanpena\SMVC\SMVCServiceProvider::class,
```

**Dont forget!**. You must to define the autoload to Src folder in your *composer.json* file.

```json
"autoload": {
    "psr-4": {
        "App\\": "app/",
        "Src\\": "src/"
    },
```    

## Quick Usages

### Create a SMVC Schema

You have four options to **create a new Schema**. 
This commands publish the new file in your \Src\Schemas folder.

```bash
    php artisan make:smvc DummySchema --crud
    php artisan make:smvc DummySchema --progressive
    php artisan make:smvc DummySchema --report
    php artisan make:smvc DummySchema --chart
```

You can check updates with:

```bash
    php artisan list
    php artisan make:smvc --help
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please using the issue tracker.

## Credits

- [Xan Pena](https://github.com/xanpena)

## Contributors 

- [Benjamín García](https://github.com/behamin)
- [Joaquín Miras](https://github.com/Joaquinmf1999)
- [Francisco Prieto](https://github.com/fjpj2310)

