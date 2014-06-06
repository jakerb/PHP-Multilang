<?php include("multilang.php"); $i = new multilang("en"); ?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
	<title>Simple Translate</title>
</head>
<body>
<h1><?= $i->say("example_header"); ?></h1>
<p><?= $i->say("heading_summary"); ?></p>

</body>
</html>