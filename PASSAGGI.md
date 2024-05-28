## CREARE UN PROGETTO LARAVEL 
1. composer create-project laravel/laravel:^10.0 nomeRepo
2. composer require pacificdev/laravel_9_preset

SE LA VERSIONE DI LARAVEL E' 10.1 IN SU
2a. andare sul file vite.config.js e modificare il path (riga 5)
   con import path from "path"

2b. modificare le versioni sul file package.json a mano oppure con
   npx npm-check-updates -u

3. npm install o npm i
4. npm run dev 

IN UN SECONDO TERMINALE 
- php artisan serve 




## PER INSTALLARE BOOTSTAP 
1. npm i --save bootstrap @popperjs/core
2. nel file app.scss inserire
   @use "~bootstrap/scss/bootstrap"
3. nel file app.js inserire
   import * as bootstrap from 'bootstrap'




## QUANDO SCARICHIAMO UN PROGETTO LARAVEL DA GITHUB 
1. npm install o npm i
2. npm run dev

IN UN SECONDO TERMINALE
1. composer i 
2. cp .env.example .env 
   (copia il file .env.example in un file con nome .env)
   dentro il file .env modificare 
   - DB_PORT=
   - DB_DATABASE=
   - DB_USERNAME=
   - DB_PASSWORD=
3. php artisan key:generate
   (genera una key che andrà nel file .env ---> riga 3 APP_KEY)
4. php artisan serve




## MODEL 
1. php artisan make:model NomeModel (Es: Train)
   il file creato si trova in
   App > Models > NomeModel.php
   
   Questo file rimane così com'è. Non dobbiamo toccarlo.




## CONTROLLER
1. php artisan make:controller NomeController (Es: TrainController)
   il file creato si trova in
   App > Http > Controllers > NomeController.php


   # NEL FILE NomeController.php
    class NomeController extends Controller{
        public function NomeFunzione(){
            return view('nomeRoute');
        }
    }


   # NEL FILE web.php
    use App\Http\Controllers\NomeController.php

    Route::get('/', [NomeController::class, 'NomeFunzione'])->name('nomeRoute');
     



## MIGRATIONS
1. php artisan make:migration create_nomeTabella_table (Es: create_trains_table)
   il file creato si trova in
   Database > Migrations > YYYY_MM_DD_nomeTabella.php

   # LA MIGRATION HA 2 METODI
   - up()
   - down()




## SEEDERS 
1. php artisan make:seeder NomeSeeder (Es: TrainSeeder)
   il file creato si trova in
   Database > Seeders > NomeSeeder.php

2. php artisan db:seed --class=NomeSeeder














