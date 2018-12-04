<?php
if(isset($_POST['submit_create']))
{
  include_once 'db_conn.php';
  $goback = "<br /><a href='index.php'><button>GO BACK</button></a>";
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $value = mysqli_real_escape_string($conn, $_POST['value']);
  if(empty($name) || empty($value))
  {
    $message = "Empty Fields";
    echo $message;
    echo $goback;
  }
  else {
    $message = "Success";
    echo $message;
    echo $goback;
  }
}
