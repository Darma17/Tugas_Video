<form action="" method="get">

    <label for="nama">Nama :</label>
    <input type="text" name="nama" id="nama" placeholder="Masukkan nama anda">
    <label for="alamat">Alamat :</label>
    <input type="text" name="alamat" id="alamat" placeholder="Masukkan alamat anda">
    <input type="submit" name="kirim" value="simpan">
</form>

<?php 

    if (isset($_GET['kirim'])) {
        
        $nama = $_GET['nama'];
        $alamat = $_GET['alamat'];
    
        echo $nama;
        echo '<br>';
        echo $alamat;
    }
?>