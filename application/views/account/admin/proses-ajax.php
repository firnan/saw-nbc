<?php
include 'koneksi.php';
$nim = $_GET['nim'];
$query = mysqli_query($koneksi, "select * from proposal where nim='$nim'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
            'proposal'      =>  $mahasiswa['proposal'],
 echo json_encode($data);
?>
