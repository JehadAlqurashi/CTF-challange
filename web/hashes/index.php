<?php
require 'flag.php';
if(hash("md5",$_GET['message']) == 0){
    echo $flag;
}

