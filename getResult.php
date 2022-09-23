<?php
include("conn.php");

$sql = "SELECT * FROM `data` ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $response = [
            'nama' => $row['nama'],
            'jenis_kelamin' => $row['jenis_kelamin'],
            'umur' => $row['umur'],
            'berat_badan' => $row['berat_badan'] == null ? "Mohon tunggu.." : $row['berat_badan'],
            'tinggi_badan' => $row['tinggi_badan'] == null ? "Mohon tunggu.." : $row['tinggi_badan'],
            'kategori' => $row['kategori'] == null ? "Mohon tunggu.." : $row['kategori'],
            'alamat' => $row['alamat']
        ];
    }
  } else {
    echo "0 results";
  }
echo json_encode($response);
?>