<?php
include_once "config_db.php";

session_start();

$CON = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if(isset($_POST['email'])) {
    if ($_POST['pass'] == $_POST['pass2']) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['fname'] = $_POST['fname'];
        $_SESSION['sname'] = $_POST['sname'];
        $_SESSION['pass'] = $_POST['pass'];
    }
}