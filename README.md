# stars-company-profile

#download https://github.com/mientz/stars-company-profile/archive/v2.0.zip

##### Penggunaan Aplikasi
Username Super Admin : **admin**
Password Super Admin : **admin**

**Koneksi Database**
* Buat database MySQL Baru Dengan Nama **kpstars**
* Import File **kpstars.sql**
* edit file **setting.php** dan edit kode seperti dibawah dan ganti sesuai kebutuhan
```
   return [
    'settings' => [
        'displayErrorDetails' => true,
        'determineRouteBeforeAppMiddleware' => true,
        "database" => [
            "host" => "localhost",
            "database_name" => "kpstars", //nama database
            "user" => "root",
            "pass" => ""
        ],
        "server" => "192.168.100.8",
    ],
  ];
```
