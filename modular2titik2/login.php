<?php
include "view/template/head.php";
?>

<title>Just Form</title>
<link rel="stylesheet" href="view/style/form-nav.css?v=1.1">
<link rel="stylesheet" href="view/style/form-s.css?v=1.2">

<?php
include "view/template/navbar.php";
?>

<h1>LOGIN</h1>

<div class="f-box">
    <div class="cont-box">
        <form action="controller/c_logres.php?action=login" method="POST">
            <label for="email">email:</label><br>
            <input type="email" id="email" name="email" required class="inp-box">
            <br><br>
            <label for="pass">Password:</label><br>
            <input type="password" id="pass" name="pass" required class="inp-box">
            <br><br>
            <input type="text" name="role" id="role" value="user" hidden>
            <br><br>
            <button class="button-box" type="submit">submit</button>
        </form>
    </div>
    <br><BR><BR>
</div>

<?php
include "view/template/footer.php";
?>
