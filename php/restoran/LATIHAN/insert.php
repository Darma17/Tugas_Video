<form action="" method="post">
<label for="kategori">Kategori :</label>
    <input type="text" name="kategori" id="kategori">
    <br>
    <input type="submit" name="simpan" value="Simpan">
</form>

<?php 

    require_once "../function.php";

    if (isset($_POST['simpan'])) {
        $kategori = $_POST['kategori'];
        $sql = "INSERT INTO tblkategori VALUES ('','$kategori')";
        
        $result = mysqli_query($koneksi,$sql); 
        header("location:http://localhost/php/restoran/kategori/select.php");
    }

?>