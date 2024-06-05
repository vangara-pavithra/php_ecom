<?php  
// session_start();

include('../config/dbcon.php');

 function getAll($table)
 { 
   global $conn;
   $query = "SELECT * FROM $table";
   return $query_run = mysqli_query($conn,$query);
 }

 function getByID($table,$id)
 { 
   global $conn;
   $query = "SELECT * FROM $table WHERE id='$id' ";
   return $query_run = mysqli_query($conn,$query);
 }

function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: '.$url);
    exit();
}

function getAllOrders()
 { 
   global $conn;
   $query = "SELECT * FROM orders WHERE status='0'";
   return $query_run = mysqli_query($conn,$query);
 }
 
 function getOrderHistory()
 { 
   global $conn;
   $query = "SELECT * FROM orders WHERE status != '0'";
   return $query_run = mysqli_query($conn,$query);
 }

 function checkTrackingNoValid($trackingNo)
 {
  global $conn;
 
  $query = "SELECT * FROM orders WHERE tracking_no='$trackingNo'";
  return mysqli_query($conn, $query);

 }
?>