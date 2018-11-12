<!dOCTYPE html>
<html>
	<head>
		<title>チャットLogin</title>
	</head>
	<style>
		h1{
			font-size:12pt;
			boder_bottom:1px solid gray;
			color: Blue;
		}
		form
		{
			border: 1px solid gray;
			padding:10px;
			margin-bottom:15px;
		}
		
		
	</style>
	
	<body>
	<h1>ログイン</h1>	
	<form action="chat.php">
		<input type="text" name="uname" value="<?= $_COOKIE['uname']?>">
		<button>ログイン</button>
	</form>
	</body>
</html>

