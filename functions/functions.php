<?php
## FUNCTIONS.PHP

function requestCheck($param) {
	if ($param === filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_SPECIAL_CHARS)) {
		return true;
	}
	else {
		return false;
	}
}

function getRequestArray($param) {
	return filter_input_array($param, FILTER_SANITIZE_SPECIAL_CHARS);
}

function includeTemplate($includePath, $file) {
	if (file_exists($includePath . $file)) {
		include_once $includePath . $file;
	}
	else {
		include_once $includePath . '404.php';
	}
}
