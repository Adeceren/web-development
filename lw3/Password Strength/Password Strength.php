<?php
  $g = $_GET["password"];
  $length = strlen($_GET["password"]);
  $result = 0;
  if(empty($g)) {
      echo "Пустая строка <br/>";
      exit;
  }
  if(preg_match('/[а-яА-Я]/', $g)) {
      echo "Только латинские буквы.";
      exit;
  }
  $result = ($length * 4);
  $digit = strlen(preg_replace('/[a-zA-Z]/', '' ,$g));
  $result += ($digit * 4);
  $letters_big = strlen(preg_replace('/[0-9a-z]/', '' ,$g));
  $result += (($length - $letters_big) * 2);
  $letters_small = strlen(preg_replace('/[0-9A-Z]/', '' ,$g));
  $result += (($length - $letters_small) * 2);
  foreach(count_chars($g) as $value) {
      if($value > 1) {
          $result -= $value;
      }
  }
  if(ctype_digit($g)) {
      $result -= $length;
  }
  if(ctype_alpha($g)) {
      $result -= $length;
  }
  echo "Надежность пароля $result";
?>