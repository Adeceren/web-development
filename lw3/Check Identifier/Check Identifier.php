<?php
$s=$_GET["identifier"];
if (!empty($_GET["identifier"])) {
	if (strstr('0123456789', $s[0])) {
		echo 'No. Запрещено начинать название с цифры. Нарушено правило SR3.';
	}
	else {
		echo 'Yes.';
	}
}
else {
	echo 'No. Нет имени.';
}
?>