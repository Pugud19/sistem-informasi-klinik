
<p align="center">
Test Web Programmer Life Inovers
</p>

## set up this project
- clone this project
```
git clone git@github.com:Pugud19/sistem-informasi-klinik.git
```

- set up laravel
```
composer install
npm install
```

make your database in local, name your database `banksampah`
import database in this repo to your sql database
,copy `.env.example` and rename to `.env` 

- run this project 
```
php artisan migrate
php artisan db:seed --class=UserSeeder
npm run dev
php artisan serve
```

- admin login
```
email: admin@example.com
password: admin123
```

## author
this project was create by [Pugud Pambudi](https://www.linkedin.com/in/pugud-pambudi-b30171231/).
