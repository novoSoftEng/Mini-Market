<?php
session_start();

if (isset($_SESSION['htovxcracf2242'])){

    $_SESSION['htovxcracf2242'] = array();

    session_destroy();

    header("Location: index.php");
}

?>
