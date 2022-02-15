<?php
session_start();
if (isset($_SESSION['email'])) {
    if ((time() - $_SESSION['login_time']) > 20) {
        header("location:index.php");
    }
}
