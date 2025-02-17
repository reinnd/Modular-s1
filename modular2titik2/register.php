<?php
include "view/template/head.php";
?>

<title>Just Form</title>
<link rel="stylesheet" href="view/style/form-nav.css?v=1.1">
<link rel="stylesheet" href="view/style/form-s.css?v=1.2">

<?php
include "view/template/navbar.php";
?>

<h1>REGISTER</h1>

<div class="f-box">
    <div class="cont-box">
        <form action="controller/c_logres.php?action=register" method="POST">
            <label for="username">Username:</label><br>
            <input type="number" id="username" name="id_user" hidden>
            <input type="text" id="username1" name="username" required class="inp-box">
            <br><br>
            <label for="pass">Password:</label><br>
            <input type="password" id="pass" name="pass" required class="inp-box">
            <br><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required class="inp-box">
            <br><br>
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" required class="inp-box">
            <br><br>
            <label for="jk">Jenis Kelamin:</label><br>
            <input type="radio" name="jk" id="jk" required value="laki-laki"> Laki-laki
            <input type="radio" name="jk" id="jk" required value="perempuan"> Perempuan
            <br><br>
            <label for="alamat">Alamat:</label><br>
            <input type="text" id="alamat" name="alamat" required class="inp-box2">
            <br><br>
            <label for="tempat_lahir">Tempat Lahir:</label><br>
            <input type="text" id="tempat_lahir" name="tempat_lahir" required class="inp-box">
            <br><br>
            <label for="tanggal_lahir">Tanggal Lahir:</label><br>
            <input type="date" id="tanggal_lahir" required name="tanggal_lahir" class="inp-box">
            <input type="text" name="role" id="role" value="user" hidden>
            <br><br>
            <button class="button-box">submit</button>
        </form>
    </div>
    <br><BR><BR>
</div>

<?php
include "view/template/footer.php";
?>