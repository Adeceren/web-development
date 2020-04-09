<?php
  $g = $_GET["password"];
  $all = strlen($_GET["password"]);
  $result = 0;
  $numbers = 0;
  if (!empty($g)) {
	while ($h <= $all) {
	  if(preg_match("[0-9]", $g)); {
		$c = $c + 4;
		$h++;
	  }
	  if(preg_match("[A-Z]", $g)); {
		$c = $c + 4;
		$h++;
		$numbers = 2;
	  }
	if(preg_match("[a-z]", $g)); {
		$c = $c + 4;
		$h++;
		$numbers = 3;
	  }
	}
	$result = ($all * 4); //+ $c;
	if($number == 0) {
	  $result = $result - $all;
	}
	echo "Надежность пароля $result $numbers";
  }
  else {
	echo "Пустая строка <br/>";
	echo "Надежность пароля $result";
  }
?>