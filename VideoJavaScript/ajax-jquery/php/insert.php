<?php 
    require_once "koneksi.php";

    
    $data = stripslashes(file_get_contents("php://input"));
    $datapelanggan = json_decode($data, true);
    
    $pelanggan = $datapelanggan['pelanggan'];
    $alamat = $datapelanggan['alamat'];
    $telp = $datapelanggan['telp'];

    if (!empty($pelanggan) and !empty($alamat) and !empty($telp)) {
        $sql = "INSERT INTO tblpelanggan VALUES('','$pelanggan','$alamat','$telp','','','')";
        if ($result = mysqli_query($con, $sql)) {
            echo "<p class='alert alert-success'>Data Sudah Disimpan!</p>";
        } else {
            echo "<p class='alert alert-danger'>Data Gagal Disimpan!</p>";
        }
    } else {
        echo "<p class='alert alert-danger'>Data Kosong</p>";
    }

?>