<?php
include('./lib/dbcon.php'); 
dbcon(); 
include('session.php');
if (isset($_POST['read'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{

	mysqli_query($GLOBALS["___mysqli_ston"], "insert into notification_read (admin_id,admin_read,notification_id) values('$session_id','yes','$id[$i]')")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
	
	
	
}
?>
<script>
window.location = 'notification.php';
</script>
<?php
}
?>