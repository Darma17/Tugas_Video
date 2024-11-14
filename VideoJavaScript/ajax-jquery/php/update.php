<?php 
    require_once "koneksi.php";

    
    $data = stripslashes(file_get_contents("php://input"));
    $datapelanggan = json_decode($data, true);

    $idpelanggan = $datapelanggan['idpelanggan'];
    $pelanggan = $datapelanggan['pelanggan'];
    $alamat = $datapelanggan['alamat'];
    $telp = $datapelanggan['telp'];

    if (!empty($pelanggan) and !empty($alamat) and !empty($telp)) {
        $sql = "UPDATE tblpelanggan SET pelanggan='$pelanggan', alamat='$alamat', telp='$telp' WHERE idpelanggan=$idpelanggan";
        if ($result = mysqli_query($con, $sql)) {
            echo "<p class='alert alert-success'>Data Berhasil Diubah!</p>";
        } else {
            echo "<p class='alert alert-danger'>Data Gagal Diubah!</p>";
        }
    } else {
        echo "<p class='alert alert-danger'>Data Kosong</p>";
    }

?>