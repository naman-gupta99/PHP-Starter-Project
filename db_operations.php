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
    $sql = "INSERT INTO entries (Name, Value) VALUES ('$name', '$value')";
    mysqli_query($conn, $sql);
    $message = "Success";
    echo $message;
    echo $goback;
  }
}
else if(isset($_POST['submit_read']))
{
  include_once 'db_conn.php';
  $goback = "<br /><a href='index.php'><button>GO BACK</button></a>";
  $sql = "SELECT * FROM entries";
  $result = mysqli_query($conn, $sql);
  echo "<table style='border : black 1px solid'>";
  foreach ($result as $key => $row)
  {
    $name = $row['Name'];
    $value = $row['Value'];
    echo "<tr>
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
