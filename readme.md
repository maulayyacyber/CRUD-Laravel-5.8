## LARAVEL 5.8  CRUD

#### FITUR-FITUR
- Auth (Default Laravel)
- Datatables Server Side (https://github.com/yajra/laravel-datatables)
- Laravel Filemanager (https://github.com/UniSharp/laravel-filemanager)
- Upload with Storage

#### SCREENSHOT
<img src="https://i.imgur.com/NlwVYkg.png" style="width: 100%">
<img src="https://i.imgur.com/8xuJiMr.png" style="width: 100%">
<img src="https://i.imgur.com/XWyZFSs.png" style="width: 100%">
<img src="https://i.imgur.com/AXVwIwz.png" style="width: 100%">
<img src="https://i.imgur.com/XNHByVX.png" style="width: 100%">

#### CARA INSTALL

copy file `.env.example` dengan nama `.env`

buatlah sebuah database baru, nama sesuai dengan konfigurasi di file `.env`

selanjutnya jalankan perintah-perintah dibawah ini di terminal

**clone dari repository**

`$ > git clone repo.git laravel5.8-crud`

**masuk ke folder project**

`$ > cd laravel5.8-crud`

**update dependency dengan composer**

`$ > composer update`

**migrasi table** 

`$ > php artisan migrate`

**dump autoload** 

`$ > php composer dump-autoload`

**insert fake data dengan seeder**

`$ > php artisan db:seed`

**symlink storage**

`$ > php artisan storage:link`

**jalankan server**

`$ > php artisan serve`


silahkan akses `http://localhost:8000`

email dan password untuk login

`alamat email : ridaulmaulayya@gmail.com`

`password     : 12345678 `
