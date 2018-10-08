<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Appetiser API

The API for Appetiser

See [WIKI](https://documenter.getpostman.com/view/1412838/RWgnYgR2) for the documentation

## Frameworks and Libraries:

- [Laravel 5.7](https://laravel.com/docs/5.7)
- [JWT-Auth](https://github.com/tymondesigns/jwt-auth/wiki)

## PHP Settings Requirement

- Requires PHP >=7.1.3


## Installation

``` bash
# install dependencies
$ composer install

# copy and configure .env variables
$ cp .env.example .env

# generate application key
$ php artisan key:generate

# migrate the database
$ php artisan migrate

# serve at localhost:8000
$ php artisan serve
```
