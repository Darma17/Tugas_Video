<form action="" method="post">
    <label for="nama">Nama :</label>
    <input type="text" id="nama" name="nama" placeholder="Masukkan nama anda">
    <label for="email">Email :</label>
    <input type="email" id="email" name="email"  placeholder="Masukkan email anda">
    <label for="password">Password :</label>
    <input type="password" id="password" name="password" placeholder="Masukkan password anda">
    <input type="submit" name="kirim" value="Login">
</form>

<?php 

    if (isset($_POST['kirim'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        echo "Nama anda : ".$nama;
        echo '<br>';    
        echo "Email anda : ".$email;
        echo '<br>';    
        echo "Password anda : ".$pass;
    }
?>