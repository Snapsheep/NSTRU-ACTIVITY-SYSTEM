<?php
session_start();
ob_start();
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Delete</title>
</head>
<body>
	
<?php
include('../mysql_connect.php');
$id = $_GET['id'];

$sql = "DELETE FROM newfeeds WHERE P_ID = '$id'";
$result = mysqli_query($link, $sql);

header("Location:new_feeds_edit.php");
mysqli_close($link);
?>

</body>
</html>