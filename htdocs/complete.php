<?php
$name = "";
$mail = "";
$info = "";
$accept = "";
$work = "";
$example = "";


if (isset($_POST['name'])) {
  $name = $_POST['name'];
  inputCheck($name);
}
if (isset($_POST['mail'])) {
  $mail = $_POST['mail'];
}
if (isset($_POST['info'])) {
  $info = $_POST['info'];
}
if (isset($_POST['work'])) {
  $work = $_POST['work'];
}
if (isset($_POST['example'])) {
  $example = $_POST['example'];
}
if (isset($_POST['accept'])) {
  $accept = $_POST['accept'];
}

function inputCheck($input)
{
  if ($input == "") {
    return false;
  }
  return true;
}


$pattern = "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
if (preg_match($pattern, $mail)) {
} else {
  $error = "使用できない文字が含まれています";
}
inputCheck($mail);
inputCheck($info);
inputCheck($work);
inputCheck($accept);
inputCheck($example);
$errors = [];

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
