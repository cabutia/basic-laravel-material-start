# basic-laravel-material-start
Personal prupose project. But feel free to use it!

# Getting started

## Requirements
There's a few dependencies you need to download before cloning the repository.
  * [Laravel](https://laravel.com) (5.4 preferred)
  * [Composer](https://getcomposer.org/download/)

## Cloning the project
First, open a `Terminal`, then enter:

`git clone https://github.com/lgabrielgomez/basic-laravel-material-start`.

This will create a directory called `basic-laravel-material-start`. Inside, you'll find the repository

## Configuring
The repository comes along with all the required files for using MaterializeCSS Framework.
Once cloned, you must `cd` into the created repository, then, install all dependencies via **Composer** running

`composer install`

If everything goes right, you should have a `vendor` folder, containing everything you need.

The next step is create a `.env` file. The easiest way (at least for me) is openin a `Terminal`, then `cd` into your repository folder, and run:

`cp .env.example .env`

Once done, you just need to edit some lines:

```(.env)
DB_CONNECTION= Database driver (default: mysql)
DB_HOST= Your database host (default: 127.0.0.1) (Yes, it's local)
DB_PORT= Your database port (default: 3306)
DB_DATABASE= Your database name
DB_USERNAME= Your database's user
DB_PASSWORD= Your database's password
```

## C'mon!

Once done everything (Yes, sometimes it's tedious), just `cd` into your project, and run:

`php artisan serve`

It will start a local development server, running under `127.0.0.1:8000` or `localhost:8000`

# Have fun!
