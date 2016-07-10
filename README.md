
# laravel-toastr


### install

Using Composer

    composer require whossun/laravel-toastr

Add the service provider to `config/app.php`

```php
Whossun\Toastr\ToastrServiceProvider::class,
```

Optionally include the Facade in config/app.php if you'd like.

```php
'Toastr'  => Whossun\Toastr\Facades\Toastr::class,
```


### Options

You can set custom options for Reminder. Run:

    php artisan vendor:publish

to publish the config file for toastr.

You can see [toastr's documentation](http://codeseven.github.io/toastr/demo.html) to custom your need.


> You can use toastr() function available.

### Dependencies

jQuery [toast](https://github.com/CodeSeven/toastr), you need to add css and js to your html.

### Basic

You should add `{!! Toastr::message() !!}` to your html.

Then.

* Toastr::info('message', 'title', ['options']);

* Toastr::success('message', 'title', ['options']);

* Toastr::warning('message', 'title', ['options']);

* Toastr::error('message', 'title', ['options']);

* Toastr::clear();

* Toastr()->info('message', 'title', ['options']);

```php
<?php

Route::get('/', function () {
    Toastr::success('Hi! this is Toastr', 'Hello', ["positionClass" => "toast-top-center"]);

    return view('welcome');
});
```

```html
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>

        {!! Toastr::message() !!}
    </body>
</html>
```



### MIT
