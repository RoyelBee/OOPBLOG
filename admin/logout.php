<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script type="text/javascript">
		alart("Logout success");
	</script>

</body>
</html>
<?php 
	session_start();
	session_unset();
	header("location: login.php");
?>