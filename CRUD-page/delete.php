<?php
require 'includes/session.php';

error_reporting(E_ALL);

$id = $_GET['person_id'];

$sql = "DELETE FROM tbl_persons WHERE id='$id'";
$query_run = mysqli_query($conn, $sql);

if($query_run) {
    echo "<script>alert('Record Deleted Successfully!');
            window.location=document.referrer;
        </script>";
}
?>