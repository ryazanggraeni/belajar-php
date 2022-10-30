<?php

/* macam-macam cara PENGULANGAN

/* 
echo "$nama";
echo "<br/>";
echo "$nama";
*/

/*
$nama = "Ryaz Pramesti";

for ($i=0; $i<5; $i++) {
    echo $nama."<br/>";
}
*/

/* 
untuk lebih banyak jumlah
*/
/*
$no = 10;
for ($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
}
*/

/*
$nama = "Ryaz Pramesti";
$no = 10;
$i = 0;
while ($i < $no) {
    $n = $i + 1;
echo $n." ".$nama."<br/>";
$i++;
}
*/

/*
$nama = "Ryaz Pramesti";
    $no = 10;
    $i = 0;
    $n = $i + 1;
do { 
    $n = $i + 1;
echo $n." ".$nama."<br/>";
$i++; 
} while ($i < $no)
*/

/*
$data = array ('apel', 'blewah', 'cery', 'duku', 'jeruk', 'kelengkeng', 'lemon' );

foreach($data as $value) {
    echo $value."<br/>";
} 
*/

/*
$nama = "Ryaz Pramesti";
if ($nama == "Ryaz Pramesti")
echo $nama." adalah seorang mahasiswa yang menempuh pendidikan di Universitas Negeri Surabaya.";
*/
/*
$nama = "Ryaz Pramesti";
switch($nama) {
    case "Ryaz Pramesti":
        $pesan = $nama. " adalah seorang mahasiswa yang menempuh pendidikan di Universitas Negeri Surabaya.";
        break;
        case "Dyah Anggraeni":
            $pesan  = $nama. " adalah seorang mahasiswa yang sedang saat ini masih semester 5.";
            break;
            default:
            $pesan  = $nama. " adalah seorang mahasiswa yang sedang saat ini masih semester 5 di Universitas Negeri Surabaya.";
}
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ryaz</title>
</head>
<body>
    
<h1>Input Nama Buah dan Diulang</h1>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<label>Nama Buah</label>
<input type="text" name="nama">
<label>Jumlah</label>
<input type="text" name="no">
<input type="submit" name="submit" value="submit">
</form>

<?php 
if(!empty($_POST['submit'])) 

    switch($_POST['nama']) {
    case "Apel":
        $pesan = $_POST['nama']. " rasanya manis dan airnya sedikit.";
        break;
        case "Blewah":
            $pesan = $_POST['nama']. " rasanya manis dan airnya banyak, sehingga cocok untuk dijadikan bahan minuman.";
            break;
            case "Cery":
                $pesan = $_POST['nama']. " sedikit masam dan biasanya untuk hiasan kue.";
                break;
                case "Duku":
                    $pesan = $_POST['nama']. " sedikit masam dan airnya sedikit.";
                    break;
                    case "Jeruk":
                        $pesan = $_POST['nama']. " ada yang masam dan ada yang manis serta airnya cukup banyak.";
                        break;
                        case "Kelengkeng":
                            $pesan = $_POST['nama']. " rasanya manis dan airnya sedikit.";
                            break;
                            case "Lemon":
                                $pesan = $_POST['nama']. " rasanya sangat masam dan airnya banyak.";
                                break;
                                default:
                                $pesan =  $_POST['nama']. " rasanya manis dan airnya sedikit.";
    }

        for ($i=0;$i<$_POST['no'];$i++) {
            echo $pesan."<br>";
        }

?>
</body>
</html>