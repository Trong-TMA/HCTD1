<?php
    $mysqli = mysqli_connect('localhost','root','','hctd');
    $mysqli->set_charset('utf8');
    if(mysqli_connect_errno()){
        echo 'Connect Failed: '.mysqli_connect_error();
        exit;
    }

?>