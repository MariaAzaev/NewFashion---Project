<?php
    include 'db.php';
    include 'config.php';

    session_start();

    if(!isset($_SESSION["user_id"])) {
        
        header('Location: ' . URL . 'listPageKim.html');
    }
?>
