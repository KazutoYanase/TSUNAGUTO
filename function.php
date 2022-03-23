<?php
	
//xss
//
function h($str) {
	return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

//current page url
//
function getUrl() {
	return (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
}

?>