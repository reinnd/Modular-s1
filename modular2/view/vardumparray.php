<?php

include_once "../model/m_user.php";

$db = new user();
$data = $db->get_data('user');

var_dump($data);
?>