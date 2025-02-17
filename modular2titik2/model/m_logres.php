<?php 

session_start();
include_once __DIR__ . '../../controller/c_connection.php';


class logres {


    private $dbconn;

    //koneksi
    public function __construct() {
        $database = new connUser();
        $this->dbconn = $database->connect();
    }

    function register($id_user, $username, $email, $pass, $nama, $alamat, $jk, $tempat_lahir, $tanggal_lahir, $role) {
        $sql = "INSERT INTO user 
        -- (username, email, password, nama_user, alamat_user, jenis_kelamin, tempatlahir_user, tanggallahir_user) 
        VALUES ('$id_user','$username', '$email', '$pass', '$nama', '$alamat', '$jk', '$tempat_lahir', '$tanggal_lahir','$role')";
        $query = mysqli_query($this->dbconn, $sql);

        if (!$query) {
            die("Error pada query add_user: " . mysqli_error($this->dbconn));
        }

        if ($query) {
            echo "<script>alert('register berhasil'); window.location='../view/tugas1.php';</script>";
        } else {
            echo "<script>alert('Gagal register. Silakan cek log error.'); window.location='../view/form.php';</script>";
        }
    }

    function login () {

    }

}

?>