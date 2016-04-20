<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>

<body>
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

	//SQL文作成（SELECT文）
	$sql='SELECT*FROM anketo WHERE 1';

	//SQL文実行
	$stmt=$dbh->prepare($sql);
	$stmt->execute();

	//取得したデータを表示する
	while(1)
	{
		$rec=$stmt->fetch(PDO::FETCH_ASSOC);
		
		//取得してきたデータがなくなったので正業分から抜けて処理を終了する
		if($rec==false)
		{
			break;
		}
		print$rec['code'];
		print$rec['nickname'];
		print$rec['email'];
		print$rec['goiken'];
		print'<br />';

	}

	//DB切断
	$dbh=null;

?>

</body>
