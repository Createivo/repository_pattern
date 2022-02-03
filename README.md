<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>



### Repository Pattern

Bind Repository in ServiceProvider 

App\Providers\AppServiceProvider

public function register()
{
    $this->app->bind(UserInterfaceRepo::class , UserRepo::class);
}