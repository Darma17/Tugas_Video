<?php 

    require_once "../function.php";

    $sql = "SELECT * FROM tblkategori WHERE idkategori = $id";
    $result = mysqli_query($koneksi,$sql);

    $row = mysqli_fetch_assoc($result);
    // $kategori = 'Makanan';
    // $id = 1;
    ?>

<form action="" method="post">
    <label for="kategori">Kategori : </label>
    <input type="text" name="kategori" value="<?php echo $row['kategori']?>">
    <input type="submit" name="simpan" value="Simpan">
</form>

<?php 

if (isset($_POST['simpan'])) {
        $kategori = $_POST['kategori'];

        $sql = "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori=$id";
        $result = mysqli_query($koneksi,$sql);
        header("location:http://localhost/php/restoran/kategori/select.php");
    }
?>