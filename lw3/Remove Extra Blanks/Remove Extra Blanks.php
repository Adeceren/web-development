<?php
  $g=$_GET["text"];
  if (!empty($g)) {
	$g = trim($g);
	echo preg_replace('/ +/', ' ', $g);
  }
  else {
	echo 'Пустая строка.';
  }
?>