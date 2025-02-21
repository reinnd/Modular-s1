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

    function login($email = null, $password = null) {
    $sql = "SELECT * FROM user WHERE email = '$email'";

    $query = mysqli_query($this->dbconn,$sql);

    $data = mysqli_fetch_assoc($query);

    if ($data) {
      //cek kesesuaian password 
      if (password_verify($password, $data['password'])) {
        
        if ($data['role'] == 'admin') {

          //Session Login atmin
          $_SESSION["data"] = $data;
          
          header("location:../views/home_admin.php");
          exit;

        }elseif ($data['role'] == 'user') {

          //session login user

          $_SESSION["data"] = $data;
        
          header("location:../views/home_user.php");
          exit;

        }else {
          echo "<script>alert('Email Atau Password Salah'), window.location='../view/login.php'</script>";
        }
      }else {
        echo "<script>alert('Email Atau Password Salah'), window.location='../view/login.php'</script>";
      }
    }
  }

}

?>
