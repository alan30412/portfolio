<?php print('<?xml version = "1.0" encoding = "utf-8"?>') ?>
<head>
	<title>Using PHP document</title>
</head>
<?php 
$file = fopen("times.txt", "r"); 
$num = fgets($file);
$num =$num+1;
$file = fopen("times.txt", "w");
fwrite($file, $num);
fclose($file);
$a= 10; 
?>
<body style="font-size: 2em">

	
	你的姓名為：<?php print("$_POST[fname]"); ?>!
	<br>
	你的學號為：<?php print("$_POST[fid]"); ?>
	<br>
	你猜的數字為：<?php print("$_POST[fnumber]"); ?>
	<br>
	<?php
		if ($a > "$_POST[fnumber]") {
			print("Bigger");
		}elseif($a < "$_POST[fnumber]"){
			print("Smaller");
		}else{
			print("Correct!!");
		}
	?>

	<br>

	你總共猜了：<?php echo "$num"; ?>次
	<br>
	<br>
</body>
<br>
<input type="button" onclick="history.back()" value="回到上一頁"></input>
</html>