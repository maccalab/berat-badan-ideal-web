<?php
require "vendor/autoload.php";
const URL = 'https://bbideal-14f54-default-rtdb.firebaseio.com';
const TOKEN = 'jvD8tNd9irI4qRmH9ib1bpUv0vMIK1kJcQd587YW';
const PATH = '/';

use Firebase\FirebaseLib;

$firebase = new FirebaseLib(URL, TOKEN);

if(isset($_GET['reset'])){
    $firebase->set(PATH . '/result/Send', 0);
    echo json_encode('success');
    return;
}

// Storing a int Gender
$gender = $_POST['gender'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['age'];
if($gender == "Laki-laki"){
    $gender = "L";
}else{
    $gender = "P";
}
$firebase->set(PATH . '/biodata/umur', $umur);
$firebase->set(PATH . '/biodata/gender', $gender);
$firebase->set(PATH . '/biodata/nama', $nama);
$firebase->set(PATH . '/biodata/alamat', $alamat);
$firebase->set(PATH . '/result/Status', 1);
echo json_encode('success');
?>