| Nama   | Sardin         |
| ------ | -------------- |
| NIM    | 312010135      |
| Kelas  | TI.20.A1       |
| Matkul | Pemograman Web |

# PERTEMUAN 9

## LAB 7 WEB

Di pertemuan kali ini kita akan mempelajari **PHP DASAR** dengan beberapa program code **_PHP_** nya.

## Belajar PHP Dasar

## LANGKAH - LANGKAH PRAKTIKUM

### 1. Instal XAMPP Untuk Server

![img](Img/ss%20instal%20Xampp.png)
**PENJELASAN**<br>
Install XAMPP untuk ***WEB SERVER*** dan kemudian ekstrak file nya dan sesuaikan dimana kalian menyimpan file tersebut.

### 2. Menjalankan Web Server

![img](Img/ss%20menjalankan%20xamp.png)
**PENJELASAN**<br>
Mengaktifkan **XAMPP** dengan menekan tombol **START SERVER APACHE** Seperti gambar di atas.

### 3. Memulai Php

Buat folder Lab7\*php_Dasar pada root directory web server (c:Xampp/htdocs/Lab7Web)
![img](Img/ss%20File%20Lab7web.png)
**PENJELASAN**<br>
Di atas saya membuat folder **lab7_php_Dasar** yang dimana folder itu disimpan dalam folder **Lab7Web** untuk repository

Kemudian akses directory pada web server dengan mengakses URL:http://localhost/Lab7Web/Lab7_php_Dasar/
![img](Img/ss%20localhost.png)
**PENJELASAN**

Di atas adalah contoh dari tampil dalam URI atau tampilan server folder tersebut.

### 4. PHP Dasar

Buat File baru dengan nama **php_dasar.php** pada directory tersebut kemudian buat kode seperti berikut.
![img](Img/ss1.png)
**PENJELASAN**<br>
Kemudian akses URL untuk hasil nya :http://localhost/Lab7Web/Lab7_php_Dasar/php_dasar.php

Di atas adalah contoh hasil dari penggunaan **PHP** dalam file html atau **embed**

```code php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?>
</body>
</html>
```

### 5. VARIABEL PHP

Menambahkan Variabel pada program
![img](Img/ss2.png)
**PENJELASAN**<br>
Di atas adalah contoh penggunaan Variabel di **PHP**

```code php
<h2>Menggunakan Variabel</h2>
    <?php
    $nim = "0411500400";
    $nama = 'Abdullah';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>
```

### 6. PREDEFINE VARIABLE $\_GET

Menggunakan **Predefine Variable**
![img](Img/ss3.png)
**PENJELASAN**<br>
Buat File baru dalam directory **lab7_php_dasar** dengan nama file nya adalah **latihan2.php** dan buat code seperti dibawah dan untuk mengaksesnya gunakan URL: http://localhost/Lab7Web/lab7_php_Dasar/latihan2.php?nama=Sardin dan tampilan nya seperti gambar diatas.

```code php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <!-- Variable $_GET -->
    <h2>Predefine Variable</h2>
<?php
    echo 'Selamat Datang ' . $_GET['nama'];
?>
</body>
</html>
```

### 7. MEMBUAT FORM INPUT
