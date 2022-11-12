<?php

if(isset($_GET['P'])) {

    if ($_GET['p'] == 'tampil')


echo $_POST['nama'];
echo "<br/>";
echo $_POST['password'];

}

else if ($_GET['p']  == "pesan") {
echo "Halo, Selamat Datang!".$_POST['nama'];
echo "<br/>";
echo "Password Anda adalah".$_POST['password'];

}

else if ($_POST['p'] == "aman") {

    if (!empty($_POST['nama'])) {
echo $_POST['nama'];

    }

    echo "<br/>";

    if (!empty($_POST['password'])) {
        echo $_POST['password'];

}

else {
    echo "password masih kosong"
}

}