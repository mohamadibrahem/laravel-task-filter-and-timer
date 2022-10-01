<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Usage

This is not a package - it's a full Laravel project that you should use as a starter boilerplate, and then add your own custom functionality.

- Clone the repository with `git clone`
- Copy `.env.example` file to `.env` and edit database credentials there
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate --seed` (it has some seeded data - see below)
- launch the main URL via: `php artisan serve` then after that's can view Website
- you can visited link `domain-name.example/test` for display Components Vue Timer and Filter 
- you can visited link `domain-name.example/employees` for display Employees show via Blade

# How use API in this project
- can use api for postman: `domain-name.example/api/get_all_cats` view all ads - required method `GET`
- can use api for postman: `domain-name.example/api/properties?cat={id}` create new ads - required method `GET`
- can use api for postman: `domain-name.example/api/get-options-child/{id}` edit {id} ads - required method `GET`

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
