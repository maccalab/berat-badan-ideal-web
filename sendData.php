<?php
require "vendor/autoload.php";
const URL = 'https://bbideal-14f54-default-rtdb.firebaseio.com';
const TOKEN = 'jvD8tNd9irI4qRmH9ib1bpUv0vMIK1kJcQd587YW';
const PATH = '/';

use Firebase\FirebaseLib;

$firebase = new FirebaseLib(URL, TOKEN);

// Storing a int Gender
$gender = $_POST['gender'];
if($gender == "Laki-laki"){
    $gender = "L";
}else{
    $gender = "P";
}
$firebase->set(PATH . '/Gender', $gender);
echo json_encode('success');
?>