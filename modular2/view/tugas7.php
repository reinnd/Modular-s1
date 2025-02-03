<?php

include "template/head.php";
?>
<title>Tugas 7</title>
<link rel="stylesheet" href="style/style.css?v=1.1">

<?php
include "template/navbar.php";

// body
include_once "../controller/c_user.php";
if($data) { 
?> 
<br><br><br>
<h1>Latihan mengrutkan Data Berdasarkan Nama User dari Z-A</h1>
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
    usort($data, function ($a, $b) {

        return strcmp($b['nama_user'], $a['nama_user']);

    });

    foreach ($data as $data) {
        $bidate = date( "Y", strtotime($data['tanggallahir_user']));
        $umur = $agenow - $bidate;
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['nama_user']      ?></td>
            <td><?php echo $umur      ?></td>
            <td><?php echo $data['tempatlahir_user'] . ", " .  date( "Y-F-d" , strtotime($data['tanggallahir_user']))      ?></td>
            <td><?php echo $data['alamat_user']      ?></td>
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