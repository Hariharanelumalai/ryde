<?php

include "st_manage_students.php"; // 

$id = $_GET['st_id']; // get id through query string

$del = mysqli_query($db,"delete from st_user where st_id = '$id'"); // delete query

// if($del)
// {
//     mysqli_close($db); // Close connection
//     header("location:all_records.php"); // redirects to all records page
//     exit;	
// }
// else
// {
//     echo "Error deleting record"; // display error message if not delete
// }
mysqli_close($db);
?>