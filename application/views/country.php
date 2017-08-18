<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ip</title>
</head>
<body>

<div id="container">
	<form action="/" method="get">
		<input type="text" name="ip" value="<? echo $ip ?>" placeholder="Input IP">
		<input type="submit" value="ok">
	</form>
	<br>
	<b>
	<? if (isset($resp->country)) print_r($resp->country) ?>
	</b>
</div>

</body>
</html>