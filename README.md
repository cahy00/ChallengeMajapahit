## Cara Install

Use the package manager (composer and npm) for installing

Do the following commands for installing

-   git clone https://github.com/cahy00/ChallengeMajapahit.git
-   cd ChallengeMajapahit
-   composer install
-   npm install
-   copy .env.example .env
-   php artisan key:generate

Create a database and import laravel_majapahit.sql
Setting database name, username, and password in your .env file
After you setting database

-   php artisan migrate --seed

Do the following instructions if you're done setting database in .env

-   php artisan jwt:secret (optional)
-   php artisan config:cache

To run the application

-   php artisan serve
-   npm run serve
