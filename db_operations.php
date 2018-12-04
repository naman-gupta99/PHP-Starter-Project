<?php
include_once 'db_conn.php';
$goback = "<br /><a href='index.php'><button>GO BACK</button></a>";

//For CREATE operation on the Database
if(isset($_POST['submit_create']))
{
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $value = mysqli_real_escape_string($conn, $_POST['value']);
  if(empty($name) || empty($value))
  {
    $message = "Empty Fields";
    echo $message;
    echo $goback;
  }
  else {
    $sql = "INSERT INTO entries (Name, Value) VALUES ('$name', '$value')";
    mysqli_query($conn, $sql);
    $message = "Success";
    echo $message;
    echo $goback;
  }
}

//For READ operation on the Database
else if(isset($_POST['submit_read']))
{
  $sql = "SELECT * FROM entries";
  $result = mysqli_query($conn, $sql);
  echo "<table style='border : black 1px solid'><tr>
  <th style='border : black 1px solid'>
  ID
  </th>
  <th style='border : black 1px solid'>
  Name
  </th>
  <th style='border : black 1px solid'>
  Value
  </th>
  </tr>";
  foreach ($result as $key => $row)
  {
    $id = $row['id'];
    $name = $row['Name'];
    $value = $row['Value'];
    echo "<tr>
    <td style='border : black 1px solid'>
    $id
    </td>
    <td style='border : black 1px solid'>
    $name
    </td>
    <td style='border : black 1px solid'>
    $value
    </td>
    </tr>";
  }
  echo "</table>";
  echo $goback;
}

//For UPDATE operation on the Database
else if(isset($_POST['submit_update']))
{
  $id = mysqli_real_escape_string($conn, $_POST['id']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $value = mysqli_real_escape_string($conn, $_POST['value']);
  if(empty($name) || empty($value) || empty($id))
  {
    $message = "Empty Fields";
    echo $message;
    echo $goback;
  }
  else {
    $sql = "UPDATE entries SET Name = '$name', Value = '$value' WHERE id = '$id'";
    mysqli_query($conn, $sql);
    $message = "Success";
    echo $message;
    echo $goback;
  }
}
