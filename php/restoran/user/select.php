<?php 
    $jumlahdata = $db -> rowCOUNT("SELECT iduser FROM tbluser");
    $banyak = 5;
    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])) {
        $p = $_GET['p'];
        $mulai = ($p * $banyak) - $banyak;
    } else {
        $mulai = 0;
    }

    $sql = "SELECT * FROM tbluser ORDER BY user ASC LIMIT $mulai,$banyak";
    $row = $db -> getAll($sql);

    $no = 1 + $mulai;
?>
<div class="float-start me-5">
    <a href="?f=user&m=insert" class="btn btn-success" role="button">Tambah Data</a>
</div>
<h3>User</h3>
<table class="table table-bordered w-80">
    <thead>
    <tr>
        <th>No</th>
        <th>User</th>
        <th>Email</th>
        <th>Level</th>
        <th>Delete</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($row as $r): ?>
            <?php 
                if ($r['aktif'] == 1) {
                    $status = "AKTIF";
                }  else {
                    $status = "BANNED";
                }
            ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $r['user'] ?></td>
            <td><?php echo $r['email'] ?></td>
            <td><?php echo $r['level'] ?></td>
            <td><a class="btn btn-danger" href="?f=user&m=delete&id=<?php echo $r['iduser'] ?>">Delete</a></td>
            <td><a class="btn  <?php if($r['aktif'] == 0) {echo "btn-danger";} else {echo "btn-info";} ?>" href="?f=user&m=update&id=<?php echo $r['iduser'] ?>"><?php echo $status ?></a></td>
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
            echo '<a class="btn btn-secondary" href="?f=user&m=select&p='.$i.'">'.$i.'</a>';
        } else {
            echo '<a class="btn btn-primary" href="?f=user&m=select&p='.$i.'">'.$i.'</a>';
        }
        echo '&nbsp &nbsp &nbsp';
    }
?>
