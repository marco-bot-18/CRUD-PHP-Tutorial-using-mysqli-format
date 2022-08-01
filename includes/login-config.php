<?php
require 'db_connection.php';
session_start();

if(isset($_REQUEST['btn_login'])){
    $username = $_POST['txt_username'];
    $password = md5($_POST['txt_password']);

    $sql = "SELECT * FROM tbl_user WHERE username='$username' and password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    if($count == 1) {
        $_SESSION['get_uname'] = $username;
        header("location: ../CRUD-page/view.php");
    }
    else{
        $_SESSION['err_message'] = "Invalid Credentials!";
        header("location: ../index.php");
    }
}

?>