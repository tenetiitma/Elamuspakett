# VEEBIPLATVORM ELAMUSTEENUSTE PAKKUMISEKS SAAREMAA- JA MUHUMAAL
Kuressaare Ametikooli tarkvaraprojekt.

## KIRJELDUS
* EESMÄRK: Saaremaa elamusteenuste pakettide pakkumine kliendile.
* MILLEKS?: Kliendi elu kergemaks muutmiseks. Pikendada Saaremaa hooajalisust. 
* KELLELE?: Turist, pere. 
* Üldine nägemus tarkvarast: Koduleht, kust klient saab valida omale puhkuse perioodiks sobiva paketi. 

### OSALEJAD
* Aren, Aliin, Kaspar, Tene (TA-22)
* Ave, Gretelis, Liisa, Merle (Ä-23)

## FIGMA
https://www.figma.com/file/am5qMEclyqA27qcDolzW0I/Elamusteenused?type=design&node-id=1%3A2&mode=design&t=tWHFjWPQEgrYCUrP-1



## PILDIMATERJALI
*AVALEHT
![avaleht](https://github.com/tenetiitma/Elamuspakett/assets/113007378/6badab9e-fd98-4c53-aa78-c7b826c560c7)


*TOOTELEHT
![toote_leht](https://github.com/tenetiitma/Elamuspakett/assets/113007378/9c373753-4c08-43d6-9e96-c1b16d340ac6)

*ANDMEBAASI ALUSTAMINE
![datastructure](https://github.com/tenetiitma/Elamuspakett/assets/113007378/d68dbead-8514-438e-8e90-9fda20a33783)

*FUNKTSIOONID
![klient-user](https://github.com/tenetiitma/Elamuspakett/assets/113007378/1668ef27-2dc7-477f-bd98-5c1bc7552c8b)

*ÜKSIKU TOOTE VAADE
![toote_leht](https://github.com/tenetiitma/Elamuspakett/assets/113007378/99b28fd8-ad80-456c-a240-979e43e2ff6c)


************************************************************************************************
## Prerequisites
- Composer version ^2.*
- Laravel: https://laravel.com/docs/10.x/deployment#server-requirements
- Node:  ^17.*
## Initial setup
- `git clone`
- `composer install`
- `npm install`
- `cp .env.example .env`
- Adjust `.env` DB_ variables
- `php artisan migrate`
## DB connection
### Local database connection (WSL)
- make sure that the SQL server is running `sudo service mysql status`
- if the SQL service is not running `sudo service mysql start`


## 1. App setup, database migrations and basic artisan commands

### Create Models, Controllers & Migrations based on `books.sql` schema using artisan command: 

> `php artisan make:model {replace with model name} -mcr`


For the pivot table book_authors only migration file is required.

This can be done by using artisan command:

> `php artisan make:migration {replace with table name}`

### Add table columns to migration files based on the `books.sql` table structures.

Find suitable type for each column by reading the [Creating columns](https://laravel.com/docs/10.x/migrations#creating-columns) documentation.

Once all the columns have been defined, we can move forward and populate the database by using artisan command:

> `php artisan migrate`
This will populate the database based on the migration schema.
However this command does not remove any existing tables.

To drop all tables before migrating:

> `php artisan migrate:fresh`
### Fill the tables by importing `books.sql` in your database managment tool.


### Refrences:
- [Creating columns](https://laravel.com/docs/10.x/migrations#creating-columns)
- [Generating migrations](https://laravel.com/docs/10.x/migrations#generating-migrations)
- [Generating model classes](https://laravel.com/docs/10.x/eloquent#generating-model-classes)

## 2. Model relationships
### Based on the database structure create model relationships.

Create model relationships for the followng scenarios:
- [x] As a user i want to see books with authors.
- [x] As a user i want to see authors books.
- [ ] As a user i want to see client orders.
- [ ] As a user i want to see book orders.
- [ ] As a user i want to see what book was orderd.
- [ ] As a user i want to see the client who made the order.

Extra:
- [ ] As a user i want to see clients books.

### To test if the relationships work we can use Artisan console (REPL) or create a test route to visualize the results in the browser enviroment.

Use the following command to initiate the console:
> `php artisan tinker`
To create our testing route we need to first add it to `web.php`

```php
Route::get('/test', function(){
    // some expamles

    // return Author::first()->books;
    // return Author::with('books')->first();

    // dd()
});
```

### Refrences
- [Eloquent: Relationships](https://laravel.com/docs/10.x/eloquent-relationships)
- [dd()](https://laravel.com/docs/10.x/helpers#method-dd)

***********************************************************************
npm install @heroicons/vue


