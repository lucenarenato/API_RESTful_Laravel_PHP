# Construindo e consumindo uma API RESTful no Laravel PHP
## building-and-consuming-a-restful-api-in-laravel-php

- composer install
- php artisan key:generate  
- php artisan migrate
- php artisan serve

## Prerequisites
- PHP 7.1 or Higher
- Composer
- MySql
- Laravel 5.6 or Higher (laravel/framework": "5.7.*)
- Postman

## API CRUD
GET /api/students
GET /api/students/{id}
POST /api/students
PUT /api/students/{id}
DELETE /api/students/{id}

```
Route::get('students', 'ApiController@getAllStudents');
Route::get('students/{id}', 'ApiController@getStudent');
Route::post('students, 'ApiController@createStudent');
Route::put('students/{id}', 'ApiController@updateStudent');
Route::delete('students/{id}','ApiController@deleteStudent');
```

## Modelo de resultado

```
[
    {
        "id": 1,
        "name": "Michael Okoh",
        "course": "Computer Science",
        "created_at": "2019-02-08 14:11:17",
        "updated_at": "2019-02-08 14:11:17"
    }
]
```

Twitter: @cpdrenato