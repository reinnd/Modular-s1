<?php

include_once "../model/m_logres.php";

$logres = new logres();

try{
     if ($_GET["action"] == 'register') {
        $id_user = $_POST['id_user'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $nama = $_POST['nama']; 
            $alamat = $_POST['alamat'];
            $jk = $_POST['jk'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $role = $_POST['role'];

            $logres->register($id_user, $username, $emaiL, $pass, $nama, $alamat, $jk, $tempat_lahir, $tanggal_lahir, $role);

    } elseif ($_GET['action'] == 'login') {
          $email = $_POST['email'];
          $password = $_POST['password'];

          $reglog->login($email, $password);

    } elseif ($_GET['action'] == 'logout') {

    }

} catch (Exception $e) {
    echo $e->getMessage();

}

?>
