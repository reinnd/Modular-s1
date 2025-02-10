
<?php
include "template/head.php";
?>

<title>Just Form</title>
<link rel="stylesheet" href="style/form-nav.css?v=1.1">
<link rel="stylesheet" href="style/form-e.css?v=1.2">

<?php
include "template/navbar.php";

include_once "../model/m_user.php";
include_once "../controller/c_connection.php";
// include_once ".."

$db = new user();

?>

<div class="f-box">
    <div class="cont-box">
        <form action="../controller/c_user.php?action=update" method="POST">
                <?php 
                foreach ($db->get_data_byId('user', $_GET['id']) as $data) { ?>
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="id_user" value="<?= $data['id_user'] ?>" hidden>
            <input type="text" id="username1" name="username" required class="inp-box" value="<?=  $data['username']?>">
            <br><br>
            <label for="pass">Password:</label><br>
            <input type="password" id="pass" name="pass" required class="inp-box" value="<?=  $data['password']?>">
            <br><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required class="inp-box" value="<?=  $data['email']?>">
            <br><br>
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" required class="inp-box" value="<?=  $data['nama_user']?>">
            <br><br>
            <label for="jk">Jenis Kelamin:</label><br>
            <?php
                $jeka = $data['jenis_kelamin'];  
            ?>
            <input type="radio" name="jk" required value="laki-laki" <?= ($jeka == 'laki-laki') ? "checked" : "" ?>> Laki-laki
            <input type="radio" name="jk" required value="perempuan" <?= ($jeka == 'perempuan') ? "checked" : "" ?>> Perempuan
            <br><br>

            <label for="alamat">Alamat:</label><br>
            <input type="text" id="alamat" name="alamat" required class="inp-box2" value="<?=  $data['alamat_user']?>">
            <br><br>
            <label for="tempat_lahir">Tempat Lahir:</label><br>
            <input type="text" id="tempat_lahir" name="tempat_lahir" required class="inp-box" value="<?=  $data['tempatlahir_user']?>">
            <br><br>
            <label for="tanggal_lahir">Tanggal Lahir:</label><br>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="inp-box" value="<?=  $data['tanggallahir_user']?>" required>
            <br><br>
            <button class="button-box">submit</button>
            <?php 
        } ?>
        </form>
    </div>
    <br><BR><BR>
</div>

<?php
include "template/footer.php";
?>