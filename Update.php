<?php include 'Connection.php';?>

<html>
<body>
 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="mname">
<input type="text" name="mrating">
<input type="submit">
</form>
</body>
</html>

<?php
// sql to delete a record
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $mname=$_REQUEST['mname'];
    $mrating=$_REQUEST['mrating'];
}

if(!empty($mname))
{
    $sql = "UPDATE movie SET mrating='$mrating' WHERE mname='$mname'";

    if ($conn->query($sql) === TRUE) {
        header("Location:Display.php");
    } else {
      echo "Error updating record: " . $conn->error;
    }
    
}
$conn->close();

?>