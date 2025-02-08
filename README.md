# Laravel - Bootstrap

## apply localization
```bash
php artisan make:middleware LanguageMiddleware
php artisan make:controller LanguageController
```

assign middleware to AppServiceProvider
```php
    use App\Http\Middleware\LanguageMiddleware;
    public function register(): void
    {
        $this->app['router']->pushMiddlewareToGroup('web', LanguageMiddleware::class);
    }
```