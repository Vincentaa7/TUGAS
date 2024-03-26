<?php	
$dataNilai = [
			"Wayan" => [	"Tugas" => 90,"UTS" => 60,"UAS" => 100],
			"Made" => [	"Tugas" => 70,"UTS" => 50,"UAS" => 50],
			"Nyoman" => [	"Tugas" => 60,"UTS" => 80,"UAS" => 70]
            ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabel data nilai</title>
    <style>
       table,tr,td{
        border: 2px solid black;
    }
    td {
        text-align: center;
    }
    </style>
</head>

<body>
    <h2>Data Nilai Mahasiswa</h2>
    
    <table>
        <tr>
            <td>nama</td>
            <td>Tugas</td>
            <td>UTS</td>
            <td>UAS</td>
        </tr>
        
        <?php foreach($dataNilai as $nama => $Nilai ) :?>
        <tr>
            <td ><?= $nama ?></td>
            <td><?= $Nilai["Tugas"] ?></td>
            <td><?= $Nilai ["UTS"]?></td>
            <td><?= $Nilai ["UAS"]?></td>

        </tr>
    <?php endforeach; ?>

    </table>
    
</body>

</html>