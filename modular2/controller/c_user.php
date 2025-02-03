<?php

include_once "../model/m_user.php";

$user = new user();
$data = $user->get_data('user');


// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $handler = new user();
    
//     // Ambil data dari $_POST
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $pass = $_POST['pass'];
//     $nama = $_POST['nama']; 
//     $alamat = $_POST['alamat'];
//     $jk = $_POST['jk'];
//     $tempat_lahir = $_POST['tempat_lahir'];
//     $tanggal_lahir = $_POST['tanggal_lahir'];

    
// }


//GANTI AKSI JADI ACTION
try {
    //mengecek apakah $_get ada atau tidak 
    if (!empty($_GET['action'])) {

        // mengecek apakah aksi tidak sama dengan hapus 
        if (!($_GET['action'] == 'hapus')) {

            //menangkap semua input dari user dengan method post
            $id_user = $_POST['id_user'];
            $username = $_POST['username1'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $nama = $_POST['nama_user'];
            $alamat = $_POST['alamat_user'];
            $jk = $_POST['jenis_kelamin'];
            $tempat_lahir = $_POST['tempatlahir_user'];
            $tanggal_lahir = $_POST['tanggallahir_user'];

            // mengecek apakah aksi yang bernilai tambah 
            if ($_GET['action'] == 'tambah') {
                // memanggil fungsi tambah_user yang ada dalam model user 
                $user->add_user($id_user, $username, $email, $pass, $nama, $alamat, $jk, $tempat_lahir, $tanggal_lahir);

                // mengecek apakah aksi yang bernilai update
            } elseif ($_GET['action'] == 'update') {
                // memanggil fungsi update_user yang ada dalam model user 
                $user->update_user($id_user, $username, $email, $pass, $nama, $alamat, $jk, $tempat_lahir, $tanggal_lahir);
            }
        }
        // else if ($_GET['ubah'] == 'ubah' && $_GET['id'] == $_GET['id']) {

        //     $user = $user->tampil_data_byid($_GET['id']);
        //     header("Location: ../views.edit.php" . urlencode($user));
        //     exit;
        // } 
        else {
            // mengambil data id dari tomboh hapus yang di pilih 
            $id_user = $_GET['id'];

            // memanggil fungsi hapus 
            $user->hapus_user($id_user);
        }
    } else {

        $user = $user->get_data('user');
    }
} catch (Exception $e) {
    //jika terjadi error pesan ini yang akan ditampilkan ke browser
    echo $e->getMessage();
}


?>