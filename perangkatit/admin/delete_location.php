<?php
include('./lib/dbcon.php'); 
dbcon(); 
if (isset($_POST['delete_location'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM stlocation where stdev_id='$id[$i]'");
}
header("location: location.php");
}
?>