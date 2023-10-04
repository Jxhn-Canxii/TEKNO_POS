# TEKNO_POS INSTALLATION DIRECTIONS

run composer install
run npm install
run npm run dev
copy .env.example to .env
run php artisan key:generate
set up your database in the .env
run php artisan migrate --seed
run php artisan storage:link
run php artisan serve
then visit http://localhost:8000 or http://127.0.0.1:8000.


make sure to remove ; in extension=gd in php.ini
;extension=gd to extension=gd

update snappy for pdf generation:::
composer require barryvdh/laravel-snappy
composer require wemersonjanuario/wkhtmltopdf-windows 0.12.2.3

and install wkhtmltopdf 64 bit windows application from this link https://wkhtmltopdf.org/downloads.html
make sure the installation folder is in Local C: root
