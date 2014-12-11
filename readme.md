# CI-Starter

This is my starter pack for CodeIgniter project. This pack using 2.2.1 version of CodeIgniter. But I added some tools for quick usage.

* Composer
* Laravel/Blade Template Engine
* Enviroment Manager
* Symfony/Console
* Facades

## Installation

```bash 
$ git clone https://github.com/ozziest/ci-starter.git
$ cd ci-starter
$ composer update
$ chmod -R 777 app/cache 
$ chmod -R 777 app/logs
```

## Configuration

First of all, you must set environment options in `public_html/index.php`;

```php 
$environment = new Ahir\Environment\Environment;
$environment->path('/../')
            ->detectEnvironment([
                'local' => ['hostname']
            ]);
```

After then, you can create `.env.local.php` in root directory;

```php 
return [
		'environment' => 'development',
		'username'    => '',
		'password'    => '',
		'database'    => ''
	];
```

> If you are using the application on production, you must define `.env.production.php` in root directory.

That's it! Enjoy the fun!

## Tricks

### Blade

You can use Laravel/Blade template engine in your project;

```php 
View::make('view_file', ['title' => 'CI-Starter']);
```

[Laravel/Blade Documentation](http://laravel.com/docs/4.2/responses#views)

### Console

We have a simple console app in CI-Starter. You can use root directory for the console;

```bash 
$ php console
```

Console has two command for maintenance mode;

```bash
$ php console down 
$ php console up
```

### Facades 

You can define new facades in `app/facades` folder like this;

```php 
use Ahir\Facades\Facade;

class View extends Facade {

    /**
     * Get the connector name of main class
     *
     * @return string
     */
    public static function getFacadeAccessor() 
    { 
        return 'App\View';
    }

}
```

You can see more information about facades; [Ahir/Facades](https://github.com/ahirarge/facades)


