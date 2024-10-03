<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{display: flex;
            width: 100%;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        a{
            font-size: 16px;
        }
        li{
            font-weight: 200;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang!<br> 
    <ul>
        <li>Nama: <?= $_POST["nama"]; ?></li>
        <li>NIS: <?= $_POST["nis"]; ?></li>
        <li>Kelas: <?= $_POST["kelas"]; ?></li>
    </ul>
    <a href="latihangetdanpost.php">Kembali ke halaman sebelumnya</a>
</h1>
</body>
</html>