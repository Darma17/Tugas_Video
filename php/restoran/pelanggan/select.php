<?php 
    $jumlahdata = $db -> rowCOUNT("SELECT idpelanggan FROM tblpelanggan");
    $banyak = 5;
    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])) {
        $p = $_GET['p'];
        $mulai = ($p * $banyak) - $banyak;
    } else {
        $mulai = 0;
    }

    $sql = "SELECT * FROM tblpelanggan ORDER BY pelanggan ASC LIMIT $mulai,$banyak";
    $row = $db -> getAll($sql);

    $no = 1 + $mulai;
?>
<h3>Pelanggan</h3>
<table class="table table-bordered w-80">
    <thead>
    <tr>
        <th>No</th>
        <th>Pelanggan</th>
        <th>Alamat</th>
        <th>Telp</th>
        <th>Email</th>
        <th>Delete</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($row as $r): ?>
        <tr>
            <?php 
                if ($r['aktif'] == 1) {
                    $status = 'Aktif';
                } else {
                    $status = 'Tidak Aktif';
                }
            ?>
            <td><?php echo $no++ ?></td>
            <td><?php echo $r['pelanggan'] ?></td>
            <td><?php echo $r['alamat'] ?></td>
            <td><?php echo $r['telp'] ?></td>
            <td><?php echo $r['email'] ?></td>
            <td><a class="btn btn-danger" href="?f=pelanggan&m=delete&id=<?php echo $r['idpelanggan'] ?>">Delete</a></td>
            <td><a class="btn btn-info" href="?f=pelanggan&m=update&id=<?php echo $r['idpelanggan'] ?>"><?php echo $status ?></a></td>
        </tr>
        <?php endforeach ?>
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
            echo '<a class="btn btn-secondary" href="?f=pelanggan&m=select&p='.$i.'">'.$i.'</a>';
        } else {
            echo '<a class="btn btn-primary" href="?f=pelanggan&m=select&p='.$i.'">'.$i.'</a>';
        }
        echo '&nbsp &nbsp &nbsp';
    }
?>
