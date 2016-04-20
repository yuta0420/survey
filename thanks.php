<?php
	// //ステップ1.db接続
	// $dsn='mysql:dbname=phpkiso;host=localhost:8080';/*本来はIPアドレスを指定*/

	// //接続するためのユーザー情報
	// $user='root';
	// $password='sp4p09y6';

	// //DB接続オブジェクトを作成
	// $dbh=new PDO($dsn,$user,$password);

	// //接続したDBオブジェクトで文字コードutf8を使うように指定
	// $dbh->query('SET NAMES utf8');

	require('dbconnect.php');
?> 

<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>

<body>
<?php
	// $nickname=$_POST['nickname'];
	// $email=$_POST['email'];
	// $goiken=$_POST['goiken'];

	$nickname=htmlspecialchars($_POST['nickname']);
	$email=htmlspecialchars($_POST['email']);
	$goiken=htmlspecialchars($_POST['goiken']);


	print $nickname;
	print '様<br />';
	print'ご意見ありがとうございました<br />';
	print'いただいたご意見『'.$goiken.'』<br />';
	print $email;
	print 'にメールを送りましたのでご確認ください。';

	$sql='INSERT INTO anketo(nickname,email,goiken)VALUES("'.$nickname.'","'.$email.'","'.$goiken.'")';
	$stmt=$dbh->prepare($sql);
	$stmt->execute();

	$dbh=null;

?>
</body>
</html>
