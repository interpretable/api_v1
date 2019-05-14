# Interpretabble-api
Laravel based api for Interpretabble

## Requirements :
- Composer

## Setup :

After you've cloned this repo

Update all the missing php dependencies with
> composer update

Copy the env.example file and rename it to .env
And edit this file to fit your db settings

> DB_CONNECTION=mysql
> DB_HOST=127.0.0.1
> DB_PORT=3306
> DB_DATABASE=mydatabase
> DB_USERNAME=myusername
> DB_PASSWORD=mypassword

Migrate the db table structure with
> php artisan migrate

For development purpose you can use
> php artisan serve 

To serve your api

For production purpose you should change your .htaccess (/public) 
and your vhost to serve your api (on apache or nginx) 



