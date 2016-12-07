<html>
<body>
<?php
include('procss.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("delete from news where id='$id'");
if($query1)
{
header('location:procss.php');
}
}
?>
</body>
</html>