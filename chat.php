<html>
	<head>
		<title>チャット</title>
	</head>
	<style>
		h1{
			font-size:12pt;
			boder_bottom:1px solid gray;
		}
		form
		{
			border: 1px solid gray;
			padding:10px;
			margin-bottom:15px;
		}
		
		.timestamp
		{
			color:lightgray;
			font-size:8pt;
		}
		
		
	</style>
	<body>
	<h1>チャット</h1>	
	<form action="write.php">
		<input type="text" name="msg">
		<button>送信</button>
	</form>
	
	<?php
	$fp = fopen("date.txt","r");
	while(($buff=fgets($fp))!= false)
	{
		$line = explode("\t",$buff);
		echo $line[0];
		echo "|";
		echo "<span class=\"timestamp\">".date("Y-m-d H:i:s",$line[1])."</span>";
		echo "<br>\n";
	}
	fclose($fp);
	?>
	</body>
</html>

