<?php
require "vendor/autoload.php";
const URL = 'https://monitoring-suhu-40e8c-default-rtdb.firebaseio.com/';
const TOKEN = 'tPsrcxmzwnNnrrMpdnMPl26FIt9ZTNRbL1a9RzUG';
const PATH = '/BeratBadan';

use Firebase\FirebaseLib;

$firebase = new FirebaseLib(URL, TOKEN);

// Storing a int scanStatus
$firebase->set(PATH . '/scanStatus', 1);
?>