<?php

	if(isset($_POST['nickname'])){
		//POST送信されてきたら以下の処理を実行
		if($_POST['nickname']=='')
		{
			echo 'ニックネームが入力されていません';
		}
		else
		{
			//ニックネームが入力されているので検索結果のページへ移動する
			header('Location: search.php?nickname='.$_POST['nickname']);
		}
	}

?>


<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>

<body>

	<form method="post">
	ニックネームを入力してください。<br />
	<input name="nickname" type="text" style="width:100px"><br />
	<br />
	<input type="submit" value="送信">
	</form>

</body>

</html>
