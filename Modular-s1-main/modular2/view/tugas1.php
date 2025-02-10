<?php

include "template/head.php";
?>
<title>Tugas 1</title>
<link rel="stylesheet" href="style/style.css?v=1.1">

<?php
include "template/navbar.php";

// body
include_once "../controller/c_user.php";
if($data) { 
?> 
<br><br><br>
<h1>Latihan menampilkan Data Dari Tabel User</h1>
<br><br><br>
<div class="a-box">
<table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Alamat</th>
        </tr>

<?php
    $no = 1;
    $agenow = date("Y");
    foreach ($data as $data2) {
        $bidate = date( "Y", strtotime($data2['tanggallahir_user']));
        $umur = $agenow - $bidate;
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data2['nama_user']      ?></td>
            <td><?php echo $umur      ?></td>
            <td><?php echo $data2['tempatlahir_user'] . ", " .  date( "Y-F-d" , strtotime($data2['tanggallahir_user']))      ?></td>
            <td><?php echo $data2['alamat_user']      ?></td>
        </tr>

<?php
        
    }

} else {
    echo "DATA TIDAK DITEMUKAN";
}
?>

</table>
</div>

<?php

include "template/footer.php";
?>