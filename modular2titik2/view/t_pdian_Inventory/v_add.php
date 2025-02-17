<?php
include "../template/head.php";
include "";
?>

<title>Just Form</title>
<link rel="stylesheet" href="../style/form-nav.css?v=1.1">
<link rel="stylesheet" href="../style/form-s.css?v=1.2">

<?php
include "../template/navbar.php";
?>

<h1>TAMBAH BARANG</h1>

<div class="f-box">
    <div class="cont-box">
        <form action="../controller/c_user.php?action=tambah" method="POST">
            <label for="barang">Nama Barang</label><br>
            <input type="number" id="barang" name="" hidden>
            <input type="text" id="nBarang" name="nBarang" required class="inp-box">
            <br><br>
            <label for="satuan">Satuan</label><br>
            <input type="text" id="" name="satuan" required class="inp-box">
            <br><br>
            <label for="qty">Kuantitas</label><br>
            <input type="number" id="qty" name="qty" required class="inp-box">
            <br><br>
            <button class="button-box">submit</button>
        </form>
    </div>
    <br><BR><BR>
</div>

<?php
include "../template/footer.php";
?>