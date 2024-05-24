# Laravel Octane FrankenPHP Demo

This repository contains a demonstration of using Laravel Octane and FrankenPHP.

**Overview**
-----------

This project is designed to showcase the integration of Laravel Octane with FrankenPHP

**Requirements**

* Docker
* Docker Compose

**Tooling Versions**
-------------------

* **FrankenPHP**: 8.3 (PHP 8.3)
* **Laravel**: v10.47.0
* **Laravel Octane**: 2.3.4
* **caddy-exec module**: latest
* **caddy-supervisor module**: latest

**Getting Started**
-------------------

1. Clone this repository using `git clone https://github.com/sneycampos/laravel-octane-frankenphp.git`
2. Run `docker compose up -d` to start the containers in detached mode
3. Access your application at `http://localhost:80`

**Key Features**

* **Caddy-exec**: Allows you to execute PHP scripts using FrankenPHP, enabling you to run Artisan commands and optimize your application.
* **Caddy-supervisor**: Enables the supervision of queue workers using Laravel's queue system, allowing you to process jobs asynchronously.

**Notes**

* This project is designed for demonstration purposes only and should not be used in production environments without proper testing and configuration.
* The `octane.Caddyfile` file contains custom settings for Caddy, including the execution of PHP code using FrankenPHP.
