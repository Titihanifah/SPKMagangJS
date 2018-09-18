# Sistem Penilaian Magang JS (Rekomendasi Departemen)

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## What needed?

If you are using Windows, the easiest way to manage all is with [Laragon](https://laragon.org/). It's similar to xampp but has all the requirements to run laravel included to the package (cmder, git, composer, php, mysql, etc).

But if you are using another operating system or decide to do it manually on windows, you must have this:

1. [git](https://git-scm.com/) of course!
2. [Composer](https://getcomposer.org/) dependency manager

And add two of thoose with adiition of php binary folder to your PATH system environment variable if you are using windows.

## How to Install

1. Clone this repository with git command on your working directory (C:\xampp\htdocs on xampp or C:\laragon\www on laragon): `git clone https://github.com/Titihanifah/SPKMagangJS.git`
2. Edit the .env.example file. Change the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME and DB_PASSWORD parameter as your database configuration.
3. Save the file as .env
4. Install the dependencies: `composer install --no-scripts`
5. Generate a random key with artisan command `php artisan key:generate`
6. Migrate the tables to database `php artisan migrate --seed`
