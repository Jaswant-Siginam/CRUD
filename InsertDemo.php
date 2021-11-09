<?php include 'Connection.php';?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $mname=$_REQUEST['mname'];
    $mrating=$_REQUEST['mrating'];
    $_SESSION["mname"] = $mname;
    $_SESSION["mrating"] = $mrating;
}

$sql = "INSERT INTO movie (mname, mrating) VALUES ('$mname', '$mrating');";



if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully","<br> ";
   echo "<a href='Display.php'>View</a>","<br>";
   echo "<a href='Delete.php'>Delete</a>","<br>";
   echo "<a href='Update.php'>Update</a>","<br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>