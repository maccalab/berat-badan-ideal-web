<?php
include("conn.php");
if(isset($_GET['nama'])){
    $nama = $_GET['nama'];
    $jk = $_GET['gender'];
    $umur = $_GET['umur'];
    $alamat = $_GET['alamat'];

    $sql = "INSERT INTO `data` (nama, jenis_kelamin, umur, berat_badan, tinggi_badan, kategori, alamat) VALUES ('$nama', '$jk', '$umur', '$berat', '$tinggi', '$kategori', '$alamat')";
    if ($conn->query($sql) === TRUE) {
    echo "data stored successfully";
    } else {
    echo "Error store data: " . $conn->error;
}

}else if(isset($_GET['berat'])){
    $berat = $_GET['berat'];
    $tinggi = $_GET['tinggi'];
    $kategori = $_GET['kategori'];
    if($kategori == 1){
        $kategori = "Berat Badan Ideal";
    }else{
        $kategori = "Berat Badan Tidak Ideal";
    }

    $idQuery = "SELECT * FROM `data` ORDER BY id DESC LIMIT 1";
    $result = $conn->query($idQuery);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $id = $row['id'];
        }
    } else {
        echo "0 results";
    }

    $sql = "UPDATE data SET berat_badan = '$berat', tinggi_badan = '$tinggi', kategori = '$kategori' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }
}
echo json_encode('OK');
?>