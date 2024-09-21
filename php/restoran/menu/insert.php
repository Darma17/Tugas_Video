<style>
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>
<?php 
    $row = $db -> getAll("SELECT * FROM tblkategori ORDER BY kategori asc");
?>
<h3>insert Menu</h3>
<div class="form-group">
    <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group w-50">
            <label for="">Kategori </label> <br>
            <select name="idkategori" id="">
                <?php foreach($row as $r) : ?>
                <option value="<?php echo $r['idkategori'] ?>"><?php echo $r['kategori'] ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group w-50">
            <label for="">Nama menu : </label>
            <input type="text" name="menu" required placeholder="Isi Menu" class="form-control">
        </div>
        
        <div class="form-group w-50">
            <label for="">Harga : </label>
            <input type="number" name="harga" required placeholder="Isi Harga" class="form-control">
        </div>
        
        <div class="form-group w-50"> 
            <label for="">Gambar : </label>
            <input type="file" name="gambar" class="form-control">
        </div>
        
        <div>
            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary mt-3">
        </div>

    </form>
</div>

<?php 

    if (isset($_POST['simpan'])) {
        $idkategori = $_POST['idkategori'];
        $menu = $_POST['menu'];
        $harga = $_POST['harga'];
        $gambar = $_FILES['gambar']['name'];
        $temp = $_FILES['gambar']['tmp_name'];
        
        if (empty($gambar)) {
            echo "<h3>Gambar Kosong</h3>";
        } else {
            $sql = "INSERT INTO tblmenu values ('',$idkategori,'$menu','$gambar','$harga')";
            move_uploaded_file($temp,'../upload/'.$gambar);
            $db -> runSQL($sql);
            header("location:?f=menu&m=select");
        }
    }
?>