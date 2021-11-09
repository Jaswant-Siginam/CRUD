<?php include 'Connection.php';?>

<html>
<body>
 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="mname">
<input type="submit">
</form>
</body>
</html>

<?php
// sql to delete a record
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $mname=$_REQUEST['mname'];
}

if(!empty($mname))
{
$sql = "DELETE FROM movie WHERE mname='$mname'";

if ($conn->query($sql) === TRUE) {
  header("Location:Display.php");
} else {
  echo "Error deleting record: " . $conn->error;
}
}
$conn->close();

?>