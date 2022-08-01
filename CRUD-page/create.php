<?php 
require 'includes/session.php';

error_reporting(E_ALL);

//date and time
date_default_timezone_set('Asia/Manila');
$timestamp = time();

if(isset($_POST['create'])){
    $firstname = ucwords($_POST['firstname']);
    $middlename = ucwords($_POST['middlename']);
    $lastname = ucwords($_POST['lastname']);
    $birthday = $_POST['bday'];
    $gender = $_POST['gender'];
    $date_time_created = date("F d, Y")." at ".date("h:i:s A");

    $sql = "INSERT INTO tbl_persons(fname, mname, lname, bday,  gender, date_added_modified)
        VALUES ('$firstname', '$middlename', '$lastname', '$birthday', '$gender', '$date_time_created')";
    
    $query_run = mysqli_query($conn, $sql);
    
    if($query_run){
        echo "<script>alert('Record Created Successfully!');
                window.location=document.referrer;
            </script>";
    }
    else {
        echo mysqli_connect_error();
    }
}

?>