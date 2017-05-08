<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<nav>
		<a href="./" class="brand-logo">Projekt Template</a>
		<ul>
			<li><a href="#1">Link 1</a></li>
			<li><a href="#2">Link 2</a></li>
			<li><a href="#3">Link 3</a></li>
		</ul>
	</nav>
<?php
$requestArray = getRequestArray(INPUT_GET);

$includePath = './templates/frontend/';

if (isset($requestArray['page'])) {
	$file = $requestArray['page'] . '.php';
	includeTemplate($includePath, $file);
}
else {
	$file = 'forside.php';
	includeTemplate($includePath, $file);
}
?>
	<footer>
		<p>&copy; <?=date('Y')?></p>
	</footer>
</body>
</html>