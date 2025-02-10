<?php
include_once '../controller/c_connection.php';

class user {

    private $dbconn;

    //koneksi
    public function __construct() {
        $database = new connUser();
        $this->dbconn = $database->connect();
    }

    function get_data($user) {
        $sql = "SELECT * FROM $user";
        $query = mysqli_query($this->dbconn, $sql); 
    
        
        if (!$query) {
            die("Query fail: " . mysqli_error($this->dbconn)); 
        }
    
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
    
        return $data;
    }
    
    function get_data_byId($user, $id) {
        $sql = "SELECT * FROM $user WHERE id_user = $id";
        $query = mysqli_query($this->dbconn, $sql); 
    
        
        // if (!$query) {
        //     die("Query fail: " . mysqli_error($this->dbconn)); 
        // }
    
        // $data = [];
        // while ($row = mysqli_fetch_object($query)) {
        //     $data[] = $row;
        // }
    
        // return $data;
        if ($query->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($query)) {
                $result[] = $data;
            }
            return $result;
        } else {
            echo "tidak ada data";
        }
    }

    function add_user($id_user, $username, $email, $pass, $nama, $alamat, $jk, $tempat_lahir, $tanggal_lahir) {
        $sql = "INSERT INTO user 
        -- (username, email, password, nama_user, alamat_user, jenis_kelamin, tempatlahir_user, tanggallahir_user) 
        VALUES ('$id_user','$username', '$email', '$pass', '$nama', '$alamat', '$jk', '$tempat_lahir', '$tanggal_lahir')";
        $query = mysqli_query($this->dbconn, $sql);

        if (!$query) {
            die("Error pada query add_user: " . mysqli_error($this->dbconn));
        }

        if ($query) {
            echo "<script>alert('Data berhasil ditambahkan'); window.location='../view/tugas1.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data. Silakan cek log error.'); window.location='../view/form.php';</script>";
        }
    }

    function update_user ($id_user, $username, $email, $pass, $nama, $alamat, $jk, $tempat_lahir, $tanggal_lahir) {
        $sql = "UPDATE user SET username = '$username', email = '$email', password = '$pass', nama_user = '$nama', alamat_user = '$alamat', jenis_kelamin = '$jk', tempatlahir_user = '$tempat_lahir', tanggallahir_user = '$tanggal_lahir' WHERE id_user = $id_user";

        $query = mysqli_query($this->dbconn, $sql);

        if ($query) {
            echo "<script>alert('Data Berhasil Di Ubah');window.location='../view/dashboard.php'</script>";
        } else {
            echo "<script>alert('Data Tidak Berhasil Di Ubah');window.location='../view/edit.php'</script>";
        }
    }


    function hapus_user($id_user){
        // $conn = new connUser();
        $query = "DELETE FROM user WHERE id_user = $id_user";

        mysqli_query( $this->dbconn, $query);

        header("location:../view/dashboard.php");
    }

}
?>
