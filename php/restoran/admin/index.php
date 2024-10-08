<?php
    session_start();
    require_once "../dbcontroller.php";
    $db = new DB();

    if (!isset($_SESSION['user'])) {
        header("location:http://localhost/php/restoran/admin/login.php");
    }

    if (isset($_GET['log'])) {
        session_destroy();
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Aplikasi Restoran Damore</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-3"> 
                <a href="index.php" style="text-decoration:none;"><h3>Admin Page</h3></a>
            </div>
            <div class="col-md-9">
                <div class="float-end mt-4"><a class="text-decoration-none" href="?log=logout">Logout</a></div>
                <div class="float-end mt-4 me-4">User : <a href="?f=user&m=updateuser&id=<?php echo $_SESSION['iduser']?>"><?php echo $_SESSION['user'] ?></a></div>
                <div class="float-end mt-4 me-4">Level : <?php echo $_SESSION['level'] ?></div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-3">
                <ul class="nav flex-column">

                    <?php 
                        $level = $_SESSION['level'];
                        switch ($level) {
                            case 'admin':
                                echo '
                                <li class="nav-item"><a href="?f=kategori&m=select" class="nav-link">Kategori</a></li>
                                <li class="nav-item"><a href="?f=menu&m=select" class="nav-link">Menu</a></li>
                                <li class="nav-item"><a href="?f=pelanggan&m=select" class="nav-link">Pelanggan</a></li>
                                <li class="nav-item"><a href="?f=order&m=select" class="nav-link">Order</a></li>
                                <li class="nav-item"><a href="?f=orderdetail&m=select" class="nav-link">Order Detail</a></li>
                                <li class="nav-item"><a href="?f=user&m=select" class="nav-link">User</a></li>
                                ';
                                break;

                            case 'kasir':
                                echo '
                                <li class="nav-item"><a href="?f=order&m=select" class="nav-link">Order</a></li>
                                <li class="nav-item"><a href="?f=orderdetail&m=select" class="nav-link">Order Detail</a></li>
                                ';
                                break;

                            case 'koki':
                                echo '
                                <li class="nav-item"><a href="?f=orderdetail&m=select" class="nav-link">Order Detail</a></li>
                                ';
                                break;
                            
                            default:
                                echo "Tidak Ada Menu";
                                break;
                        }
                    ?>
                </ul>
            </div>
            <div class="col-md-9">
                <?php 
                    if (isset($_GET['f']) && isset($_GET['m'])) {
                        $f = $_GET['f'];
                        $m = $_GET['m'];
                        $file = '../'.$f.'/'.$m.'.php';
                        
                        require_once $file;
                    }
                ?>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <p class="text-center">2024 - copyright@damore.com</p>
            </div>
        </div>
    </div>
</body>
</html>