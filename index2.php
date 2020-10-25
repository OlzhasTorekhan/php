<?php
  header('Content-type: text/html; charset=utf-8');
	require_once 'phpQuery/phpQuery/phpQuery.php';
  $url='http://www.edu-tradeunion.kz/';
  $file = file_get_contents($url);
  $doc = phpQuery::newDocument($file);
?>