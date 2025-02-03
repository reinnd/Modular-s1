<?php

class connUser {
    private $host = "localhost";     
    private $db_name = "latihan_xirpl2"; 
    private $username = "root";      
    private $password = "";          
    public $conn;                  

    //  koneksi ke database
    public function connect() {
        $this->conn = mysqli_connect(
            $this->host,
            $this->username,
            $this->password,
            $this->db_name
        );

        if(!$this->conn) {
            die("connect error: " . mysqli_connect_error());
        }
        return $this->conn;
    }

    // tutup koneksi
    public function disconnect() {
        mysqli_close($this->conn);
    }

}

?>