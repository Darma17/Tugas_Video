<?php 
    $jumlahdata = $db -> rowCOUNT("SELECT idkategori FROM tblkategori");
    $banyak = 2;
    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])) {
        $p = $_GET['p'];
        $mulai = ($p * $banyak) - $banyak;
    } else {
        $mulai = 0;
    }

    $sql = "SELECT * FROM tblkategori ORDER BY kategori ASC LIMIT $mulai,$banyak";
    $row = $db -> getAll($sql);

    $no = 1 + $mulai;
?>
<div class="float-start me-5">
    <a href="?f=kategori&m=insert" class="btn btn-success" role="button">Tambah Data</a>
</div>
<h3>Kategori</h3>
<table class="table table-bordered w-50">
    <thead>
    <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    </thead>
    <tbody>
        <?php if(!empty($row)) { ?>
            <?php foreach ($row as $r): ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $r['kategori'] ?></td>
                <td><a class="btn btn-danger" href="?f=kategori&m=delete&id=<?php echo $r['idkategori'] ?>">Delete</a></td>
                <td><a class="btn btn-success" href="?f=kategori&m=update&id=<?php echo $r['idkategori'] ?>">Update</a></td>
            </tr>
            <?php endforeach ?>
        <?php } ?>
    </tbody>
</table>

<?php 

    if (isset($_GET['p'])) {
        $p = $_GET['p'];
    } else {
        $p = 1;
    }
        for ($i=1; $i <= $halaman; $i++) { 
        if ($i == $p) {
            echo '<a class="btn btn-secondary" href="?f=kategori&m=select&p='.$i.'">'.$i.'</a>';
        } else {
            echo '<a class="btn btn-primary" href="?f=kategori&m=select&p='.$i.'">'.$i.'</a>';
        }
        echo '&nbsp &nbsp &nbsp';
    }
?>
