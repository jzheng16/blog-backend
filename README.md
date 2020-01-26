# blog-backend


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.





## Personal Notes 

### Commands 
  1. Create MVC shortcut: php artisan make:model Project -mc 
  2. Create migration: php artisan make:migrate create_posts_table
  3. Migrate/Rollback: php artisan migrate / migrate:rollback
  4. Seed DB: php artisan db:seed --class DatabaseSeeder

### Routes
  1. API routes are defined within routes/api.php
  2. View routes are defined within routes/web.php

### Models

  **Defining Relationships**
  [Laravel Relationships](https://laravel.com/docs/5.8/eloquent-relationships#one-to-many)
  Define relationships within the model classes for each table. 
  Types:
  1. One to one -> $this->hasOne('phone'); $this->belongsTo('user')
  2. 
    

  
