<?php
require('flag.php');
$username="admin";
$password = bin2hex(openssl_random_pseudo_bytes(20));
$rep = file_get_contents("php://input");
$jsons = json_decode($rep);
if($jsons->username=="admin" && $jsons->password == $password){
    echo $flag;
}else{
    die("Wrong Password Or Username");
}
highlight_file(__FILE__);
?>