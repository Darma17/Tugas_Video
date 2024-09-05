<nav>
    <ul>
        <li><a href="?menu=isi">Isi</a></li>
        <li><a href="?menu=hapus">Hapuskan</a></li>
        <li><a href="?menu=musnah">Musnahkan</a></li>
    </ul>
</nav>
<?php 

    session_start();

    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];
        switch ($menu) {
            case 'isi':
                echo '<h1>'."Anda memilih mengisi session".'</h1>';
                isiSession();
                break;
            case 'hapus':
                echo '<h1>'."Anda memilih menghapus session nama".'</h1>';
                unset($_SESSION['nama']);
                break;
            case 'musnah':
                echo '<h1>'."Anda memilih memusnahkan semua session".'</h1>';
                session_destroy();
                break;
            
            default:
                # code...
                break;
        }
    }

    function isiSession() {
        $_SESSION ['nama'] = 'Damore';
        $_SESSION ['alamat'] = 'Black Century';
    }


?>