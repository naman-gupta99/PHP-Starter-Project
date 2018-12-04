<?php
if(isset($_POST['submit_create']))
{
  include_once 'db_conn.php';
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $value = mysqli_real_escape_string($conn, $_POST['value']);
  if(empty($name) || empty($value))
  {
    $message = "Empty Fields";
  }
  else {
    $message = "Success";
  }
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("Location: index.php?create=empty_fields");
}
