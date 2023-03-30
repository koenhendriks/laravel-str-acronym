# Laravel Acronym Package

This package provides a macro for generating acronyms from strings in Laravel projects using the `Str` helper and supports the `Stringable` class.

It originates from [this Pull Request](https://github.com/laravel/framework/pull/46615)

## Installation

You can install the package using Composer:

`composer require koenhendriks/laravel-str-acronym`

After installing the package Laravel should automatically discover the package. 

If you want you can register the service provider in your Laravel application manually. You can do this by adding the service provider to the `providers` array in your `config/app.php` file:

```php
'providers' => [
    KoenHendriks\StrAcronym\StrServiceProvider::class,
],
```
Once you've registered the service provider, you can start using the acronym macro in your Laravel application.

## Usage
To generate an acronym from a string, you can call the acronym method on the Str helper:

```php
use Illuminate\Support\Str;

$acronym = Str::acronym('Hello World'); // Returns 'HW'
```

If you prefer to use the Fluent Strings, you can call the acronym method on a Stringable object:

```php
use Illuminate\Support\Str;

$acronym = Str::of('hello world')->headline()->acronym(); // Returns 'HW'
```

You can also provide a delimiter string as an optional parameter to separate the acronym letters:

```php
use Illuminate\Support\Str;

$acronym = Str::acronym('Hello World', '.'); // Returns 'H.W.'
$acronym = Str::of('hello world')->headline()->acronym(); // Returns 'H.W.'

```

## Testing

This package is using PhpUnit to unit test the macros. A simple alias has been created with composer to run the tests. 

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Koen Hendriks](https://github.com/koenhendriks)
- [All Contributors](../../contributors)


## License
This package is licensed under the MIT License. See the LICENSE file for more information.

## Contributing
If you find any issues with the package or have suggestions for improvements, feel free to open an issue or pull request on the GitHub repository. 
