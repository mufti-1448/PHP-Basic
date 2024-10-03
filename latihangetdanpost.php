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
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        input{
            padding: 10px;
            border: 1px solid gray;
            border-radius: 4px;
            margin-bottom: 10px;
            box-shadow: 0 0 10px black;
        }
        .button{
            margin: auto;
            padding: 10px;
            width: 100px;
            color: white;
            cursor: pointer;
            background-color: blue;
            box-shadow: 0 0 10px black;
        }
        .button:hover{
            background-color: darkblue;
            color: gray;
        }
        h2{
            text-align: center;
            margin-bottom: 25px;
        }
    </style>
</head>
<body>
    <h2>Silahkan Masukan Data Diri Anda</h2>
    <form action="getoutput.php" method="post">
        <input type="text" name="nama" placeholder="Masukan Nama"><br>
        <input type="text" name="nis" placeholder="Masukan NIS"><br>
        <input type="text" name="kelas" placeholder="Masukan Kelas"><br>
        <input class="button" type="submit" value="Kirim">
    </form>
</body>
</html>