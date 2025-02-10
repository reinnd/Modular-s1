<?php

include "../controller/c_connection.php";
//include "view/template/nav.php";


/*

│── /MODULAR2TITIK2
│   ├── /controller
│   │   ├── LoginController.php
        ├──
│   ├── /models
│   │   ├── UserModel.php
│   ├── /views
│   │   ├── login.php
│── /config
│   ├── Database.php
│── /public
│   ├── index.php
│── .htaccess

*/


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
</head>
<body>
    <center>
    <form> <br><br><br><br> <br><br><br> <hr>
        <label for="username" id="username"> Username </label>
        <input type="text" id="username" name="username"></input> <br> <br>
        <label for="password" id="password"> Password </label>
        <input type="password" id="pass" name="password"> </input><br><br>
        <button type="submit" action="view/form-1.php">Register</button> <br> <br>
         Belum punya akun? <a href="register.php"> Klik disini!</a>
    </form></center> <hr>
</body>
</html>

<?php

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user["password"])) {
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["username"] = $user["username"];
            header("Location: view/form-1.php");
            exit();
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
}


?>