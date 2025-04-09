# Laravel-Blog-Package


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🚀 Laravel Blog Package by Smartttech

A plug-and-play Laravel package to manage and display blog posts with ease. This package includes routes, controllers, components, views, and stubs — everything you need to get started with a blog section in your Laravel app.

---

## 📦 Features

- Full blog listing and blog detail components
- Slug-based routing
- Publishable views using stubs
- Blade components for easy integration
- Easy customization support

---


## Technologies Used
- Laravel: The backend framework.
- MySQL: For database management.
- Bootstrap: For styling.


## **Requirements**

To run this project, ensure that the following prerequisites are met:

### ✅ **PHP 8.0+**
- This project requires **PHP version 8.0** or higher for optimal performance and compatibility.

### ✅ **Laravel 8+**
- The application is built using **Laravel 8** or newer, ensuring you have access to the latest Laravel features.

### ✅ **Composer**
- **Composer** is required to manage PHP dependencies. If you haven't already, [download and install Composer](https://getcomposer.org/).

### ✅ **Local Server (Laragon, XAMPP, WAMP)**
- A local server environment is needed for running the application:
  - **[Laragon](https://laragon.org/)** (Recommended for Windows users)
  - **[XAMPP](https://www.apachefriends.org/index.html)**
  - **[WAMP](http://www.wampserver.com/en/)**

### ✅ **MySQL 5+**
- **MySQL version 5** or higher is required for database management and running migrations.



## Install this package 

### Install the package Via Composer
```bash
composer require smartttech/blog:dev-main
```
### publish the packages Views
```bash
php artisan vendor:publish --tag=blog-views
```
### Run migrations
```bash 
php artisan migrate
```


## Usage in your Project 
- Blog Listing Componenet 
#### Use this in any Blade file to show all blog posts:
```bash
<x-blog-listing />
```
-  Blog Details Component
#### When viewing a single blog post: 
```bash
<x-blog-details :blog="$blog" />
```


# About the Project

**smartttech/blog** is a Laravel package designed to seamlessly integrate a complete blog system into your Laravel application. Whether you're building a CMS, a content-driven website, or just need a blogging module, this package helps you get up and running in minutes.
## It includes:

- A dynamic blog listing page

- Clean and customizable Blade components
- Routes, controllers, views, migrations – all packaged

- Stub support for publishing and modifying views easily



#### **Benefits of Blog packages**
- **🚀 Quick Integration**:No need to build a blog system from scratch. Just install, publish, and start using in minutes.
- **💡 Pre-built Components**: Includes ready-to-use Blade components like <x-blog-listing /> and <x-blog-details /> for faster development.
- **📂 Stub File Support**: Allows developers to publish templates and override them without touching the core package files.



## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
