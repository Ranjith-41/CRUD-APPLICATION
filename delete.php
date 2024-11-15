<?php
$con=mysqli_connect("localhost","root","","employee");
$delete=$_GET['edit']??'';

$sql="DELETE FROM details WHERE id='$delete'";
$s=mysqli_query($con,$sql);
if($s)
{
    echo '<script>location.replace("index.php")</script>';
}
else{
    echo "Error:".$con->error;
}



?>