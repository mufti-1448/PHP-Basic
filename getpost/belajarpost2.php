<?php
    $jur = ['PPLG', 'TJKT', 'TO', 'DPB'];
    $kelas = [
        'PPLG' => ['6', '127', '8' ],
        'TJKT' => ['12', '342', '12'],
        'TO' => ['12', '310', '12'],
        'DPB' => ['5', '103', '5']
    ];
//memilih data dari selected box 
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $key = $_POST['pilihan']; //mengambil name dari selected
        //memilih berdarasarkan key dari array multidimentional (md)
        //array_key_exists = mencari key dari array MD
        //array_key_exists(kunci, var_array_md)
        if(array_key_exists($key, $kelas)) {
            //menampung hasil pilihan ke dalam var
            $hasil = $kelas[$key];
        }else{
            //jika data kosong/tidak ada, pindah ke arrray kosong
            $hasil = [];
        };
    };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin-bottom: 10px;
        }
        table{
            text-align: center;
        }
        .button{
            margin: auto;
            color: white;
            cursor: pointer;
            background-color: blue;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid gray;
        }
        .button:hover{
            background-color: darkblue;
            color: gray;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <select name="pilihan" id="">
            <option value="" selected>Pilih Jurusan</option>
            <?php foreach($jur as $j):?>
                <option value="<?php echo $j; ?>">
                    <?php echo $j; ?>
                </option>
            <?php endforeach ?>
        </select>
        <input class="button" type="submit" value="Pilih" name="kirim">
    </form>
    <table border="1" cellspacing="0px">
        <tr>
            <td>Jumlah Kelas</td>
            <td>Jumlah Siswa</td>
            <td>Jumlah Guru</td>
        </tr>
        <?php foreach($kelas as $k): ?>
            <tr>
                <?php foreach($k as $data): ?>
                    <td><?php echo $data ?></td>
                <?php endforeach ?>
            </tr>
        <?php endforeach ?>
    </table>
    <!-- Menampilkan hasil berdasarkan pilihan -->
    <h2>Hasil Pilihan</h2>
    <ul>
            <?php if(isset($key)): ?>
                <?php foreach($hasil as $h): ?>
                    <li><?php echo $h; ?></li>
                <?php endforeach ?>
            <?php else: ?>
                <li>Maaf, data tidak ditemukan</li>
            <?php endif ?>
    </ul>
</body>
</html>