<?php
require 'flag.php';
$isAdmin = False;

foreach($_GET as $var => $val){
    $$var = $val;
    
}
if($isAdmin){
    echo $flag;
    die();

}
highlight_file(__FILE__);

$hello = "hello";
$$hello = "dd";
?>