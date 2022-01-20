<?php

$nama     = $_POST['nama'];
$password = $_POST['password'];

if($nama == "fahri" && $password == "kotabaru"){
 header('Location: main.php');
} else {
 echo "Silahkan Coba Lagi";
}


?>