<?php
function inputCheck($input)
{
  if ($input == "") {
    return false;
  }
  return true;
}

$name = "";
$mail = "";
$info = "";
$accept = "";
$work = "";
$example = "";

$inputTexts = [
  'name', 'mail', 'info', 'work', 'example', 'accept'
];
$errors = [];

foreach ($inputTexts as $key) {
  if (isset($_POST[$key])) {
    $value = $_POST[$key];
    inputCheck($value);
    var_dump($inputTexts);
    break;
  }
  var_dump($inputTexts);
}

$pattern = "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
if (preg_match($pattern, $mail)) {
} else {
  $error = "使用できない文字が含まれています";
}

if (!inputCheck($name)) {
  $errors['name'] = "名前が未入力です。";
}

if (!inputCheck($mail)) {
  $errors['mail'] = "未入力です。";
}

if (!inputCheck($info)) {
  $errors['info'] = "未入力です。";
}
if (!inputCheck($work)) {
  $errors['work'] = "未入力です。";
}


if (!inputCheck($accept)) {
  $errors['accept'] = "未選択です。";
}

if (!inputCheck($example)) {
  $errors['example'] = "未入力です。";
}

if (!empty($errors)) {
  include "../view/indexhtml.php";
  exit;
}

include "../view/completehtml.php";
