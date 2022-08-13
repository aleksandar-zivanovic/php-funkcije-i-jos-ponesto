<?php

if (isset($_GET['name']) && $_GET['name'] != NULL) {
    $varFromJS = $_GET['name'];
    echo $varFromJS;
} else {
    header("location:JStoPHP.php");
}
?>