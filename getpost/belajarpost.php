<!-- <?php
//isset => not null
    if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        echo "Selamat Datang " .$nama;
    };
    // echo "Selmat Datang " . $_POST['nama'];

?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: auto;
            padding: auto;
            display: flex;
            flex-direction: column;
            font-family: Arial, Helvetica, sans-serif;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        input{
            padding: 10px;
            border: 1px solid gray;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        .button{
            margin: auto;
            padding: 10px;
            width: 100px;
            color: white;
            cursor: pointer;
            background-color: blue;
            margin-bottom: 15px;
        }
        .button:hover{
            background-color: darkblue;
            color: gray;
        }
        .container{
            margin: 0;
            padding: 0;
            width: 300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: lightgreen;
            border-radius: 7px;
            box-shadow: 0 0 10px black;
        }
    </style>
</head>
<body>
    <div class="container">
    <h2>Perkalian Sederhana</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label class="label" for="">Masukan Angka Pertama : </label><br>
        <input type="number" name="angkaPertama"><br>
        <label class="label" for="">Masukan Angka Kedua : </label><br>
        <input type="number" name="angkaKedua"><br>
        <input class="button" type="submit" name="kirim">
    </form>
    </div>
</body>
</html>
<?php 


if(isset($_POST['kirim'])){
    $angkaPertama = $_POST['angkaPertama']; 
    $angkaKedua = $_POST['angkaKedua'];

    if(empty($angkaPertama) || empty($angkaKedua)){
        echo 'Anda harus memasukkan angka!';
    } else {
        echo 'Hasil dari ' . $angkaPertama . ' X ' . $angkaKedua . ' adalah ' . $angkaPertama*$angkaKedua;
    }

}; 


?>