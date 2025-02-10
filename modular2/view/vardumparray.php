<?php

include_once "../model/m_user.php";

$db = new user();
$data = $db->get_data_byId('user', 1);

var_dump($data);
?>