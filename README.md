Running this  Laravel project on your local machine:

Before you begin, make sure you've [Laravel Framework](https://laravel.com/) installed on your local machine.

Use below steps to run this project locally: 

1. First clone this project on your local machine:
`> git clone https://github.com/VeshGrg/laravel_email_notify.git`

2. Jump into the project directory:
`> cd laravel_email_notify`

3. Copy existing `.env.example` file as `.env` and setup environment variables
`> cp .env.example .env`
Make sure you enter correct credential in your new `.env` file for connecting with the local database.

4. Install all the required dependencies using `composer`
`> composer install `  

5. Use Artisan's `key` command to generate APP key
`> php artisan key:generate`

6. Use Artisan's `migrate` command to run all outstanding migrations
`> php artisan migrate`

7. Use Artisan's `db` command to run seeders
`> php artisan db:seed`

8. Use Artisan's `serve` command to run the app
`> php artisan serve`



 
 
