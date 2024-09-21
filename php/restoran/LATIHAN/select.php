<style>
    .container {
        text-align: center;
    }
    .container table {
        margin: 0 auto;
    }
    .container table tr #no {
        text-align: center;
    }
    .container #nama {
        width: 200px;
        height: 30px;
    }
    .container #edit {
        width: 100px;
        height: 30px;
        text-align: center;
        
    }
</style>
<div class="container">

<h3><a href="http://localhost/php/restoran/kategori/insert.php">Tambah Data</a></h3>
<?php 

    require_once "../function.php";

    if (isset($_GET['ubah'])) {
        $id = $_GET['ubah'];
        require_once "update.php";
    }

    if (isset($_GET['hapus'])) {
        $id = $_GET['hapus'];
        require_once "delete.php";
    }

    echo '<br>';

    $sql = "SELECT idkategori FROM tblkategori";
    $result = mysqli_query($koneksi,$sql);

    $jumlahdata = mysqli_num_rows($result);
    
    $banyak = 3;
    $halaman = ceil($jumlahdata / $banyak);
    
    for ($i=1; $i <= $halaman; $i++) { 
        echo '<a href="?p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
    
    echo '<br>';
    echo '<br>';
    
    if (isset($_GET['p'])) {
        $p = $_GET['p'];
        $mulai = ($p * $banyak) - $banyak;
    }else {
        $mulai = 0;
    }

    $sql = "SELECT * FROM tblkategori LIMIT $mulai,$banyak";
    $result = mysqli_query($koneksi,$sql);
    // var_dump($result);

    $jumlah = mysqli_num_rows($result);
    // echo '<br>';
    // echo $jumlah;

    echo '
    <table border="1px">
    <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Hapus</th>
        <th>Ubah</th>
    </tr>
    ';

    $no = $mulai + 1;
    if ($jumlah > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td id="no">'.$no++.'</td>';
            echo '<td id="nama">'.$row['kategori'].'</td>';
            echo '<td id="edit"><a href="?hapus='.$row['idkategori'].'">'.'Hapus'.'</a></td>';
            echo '<td id="edit"><a href="?ubah='.$row['idkategori'].'">'.'Ubah'.'</a></td>';
            echo '</tr>';
        }
    }

    echo '</table>';
?>
</div>