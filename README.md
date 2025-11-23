# PHP Interview Project

## About

This is a small Laravel project to test your PHP skills. It exposes a simple API endpoint that returns a list of vehicle families from which you are to transform and then save into a CSV file.

## Local Setup

1. Clone this repository
2. Run `composer install`
3. Run `php artisan serve`
4. Visit `http://localhost:8000/api/vehicles/families` in your browser to ensure the API is working

## Docker Setup

1. Clone this repository
2. Run `docker compose up -d`
3. Visit `http://localhost:8000/api/vehicles/families` in your browser to ensure the API is working
4. Shell into `php-fpm` container to run `artisan` commands: `docker compose exec -it php-fpm /bin/bash`

## Task

1. Create a new Laravel command that will transform the API response into a CSV file (`php artisan make:command ExportVehicles`)
2. Using a HTTP client of your choice, make a request to the API endpoint (`http://localhost:8000/api/vehicles/families`)
3. Transform the response into an array of vehicle family objects of the following structure:
    ```php
    [
        [
            'id' => 1,
            'type' => 'REDBOOK',
            'make' => 'Ford',
            'label' => 'Focus'
            'slug' => 'focus',
            'value' => 'dadd330c5584660c'
        ],
        ...
    ]
    ```
4. Sort the transformed array by the `label` key in ascending order
5. Save the transformed data into a CSV file in the `storage/app` directory
