<?php
    $jur = ['PPLG', 'TJKT', 'TO', 'DPB'];
    $kelas = [
        'PPLG' => ['6', '127', '8'],
        'TJKT' => ['12', '342', '12'],
        'TO' => ['12', '310', '12'],
        'DPB' => ['5', '103', '5']
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            text-align: center;
        }
    </style>
</head>
<body>
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
</body>
</html>