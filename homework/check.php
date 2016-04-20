<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>

<body>
<?php
	for ($i=0; $i < 100; $i++) { 
	if(($i+1)%3==0){
		echo 'FiZZ';
		if(($i+1)%5==0){
			echo 'BuZZ';
		}
	}
	else if (($i+1)%5==0)echo 'BuZZ';
	else echo $i+1;
	echo '<br />';
	}
?>

</body>
