<?php 
    require_once "koneksi.php";

    
    $data = stripslashes(file_get_contents("php://input"));
    $idpelanggan = json_decode($data, true);
    
    $idpelanggan = $idpelanggan['idpelanggan'];

    if (!empty($idpelanggan)) {
        $sql = "DELETE FROM tblpelanggan WHERE idpelanggan=$idpelanggan";
        if ($result = mysqli_query($con, $sql)) {
            echo "<p class='alert alert-success'>Data Sudah Dihapus!</p>";
        } else {
            echo "<p class='alert alert-danger'>Data Gagal Dihapus!</p>";
        }
    } else {
        echo "<p class='alert alert-danger'>Data Belum Dipilih</p>";
    }

?>