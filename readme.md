##LARAVEL 5.8  CRUD

####FITUR-FITUR
- Auth (Default Laravel)
- Datatables Server Side (https://github.com/yajra/laravel-datatables)
- Laravel Filemanager (https://github.com/UniSharp/laravel-filemanager)
- Upload with Storage
####SCREENSHOT
<img src="https://i.imgur.com/NlwVYkg.png" style="width: 100%">
<img src="https://i.imgur.com/8xuJiMr.png" style="width: 100%">
<img src="https://i.imgur.com/XWyZFSs.png" style="width: 100%">
<img src="https://i.imgur.com/AXVwIwz.png" style="width: 100%">
<img src="https://i.imgur.com/XNHByVX.png" style="width: 100%">

####CARA INSTALL

buatlah file baru di root project dengan nama `.env`

masukkan kode berikut ini di file `.env` dan kemudian simpan

`APP_NAME=Laravel`
`APP_ENV=local`
`APP_KEY=base64:b+xfudeIGbeihPW85W1WdbcbLnFMqblxvzaO17IHsMU=`
`APP_DEBUG=true`
`APP_URL=http://localhost`

`LOG_CHANNEL=stack`

`DB_CONNECTION=mysql`

`DB_HOST=127.0.0.1`

`DB_PORT=3306`

`DB_DATABASE=`

`DB_USERNAME=`

`DB_PASSWORD=`

`BROADCAST_DRIVER=log`

`CACHE_DRIVER=file`

`QUEUE_CONNECTION=sync`

`SESSION_DRIVER=file`

`SESSION_LIFETIME=120`

`REDIS_HOST=127.0.0.1`

`REDIS_PASSWORD=null`

`REDIS_PORT=6379`

`MAIL_DRIVER=smtp`

`MAIL_HOST=smtp.mailtrap.io`

`MAIL_PORT=2525`

`MAIL_USERNAME=null`

`MAIL_PASSWORD=null`

`MAIL_ENCRYPTION=null`

`AWS_ACCESS_KEY_ID=`

`AWS_SECRET_ACCESS_KEY=`

`AWS_DEFAULT_REGION=us-east-1`

`AWS_BUCKET=`

`PUSHER_APP_ID=`

`PUSHER_APP_KEY=`

`PUSHER_APP_SECRET=`

`PUSHER_APP_CLUSTER=mt1`

`MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"`

`MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"`

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
