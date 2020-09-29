# Package Imob Laravel  
  
Real estate package for laravel
  
## Installation  
```php 
composer install confrariaweb/laravel-imob
  ```

The "confrariaweb/laravel-imob package" uses the following packages in parallel:
- confrariaweb/laravel-acl
- confrariaweb/laravel-cielo
- confrariaweb/laravel-financial
- confrariaweb/laravel-imob
- confrariaweb/laravel-option
- confrariaweb/laravel-template
- confrariaweb/laravel-template-dashboard-argon
- confrariaweb/laravel-user
- confrariaweb/laravel-vendor
- 
## Configurations
Run the command to import the necessary configuration files:
```php
php artisan vendor:publish --force
```
Edit the ".env" file and include the application's Dashboard Template configuration:
```php
CW_DASHBOARD_LAYOUT="templateDashboardArgon::layouts.app"  
CW_DASHBOARD_VIEWS="templateDashboardArgon::"
```

## License  
  
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).