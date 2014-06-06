<?php include("multilang.php"); if(isset($_GET['language']) && $_GET['language'] == "de") {$i = new multilang("de");} else {$i = new multilang("en");} ?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
	<title>Define by GET</title>
</head>
<body>
<h1><?= $i->say("example_header"); ?></h1>
<p><?= $i->say("example_define_get"); ?></p>

</body>
</html>