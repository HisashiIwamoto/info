<?php
$length_check =[];
$errors = [];
$inputTexts = [
  'name', 'mail', 'info', 'work', 'gender', 'accept'
];
$mail = "";

foreach ($inputTexts as $key) {
  if (isset($_POST[$key])) {
    if (!empty($_POST[$key])) {
    } else {
      $errors[$key] = $key . "が未入力です";
    }
  }
}

$pattern = "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
if (!preg_match($pattern, 'mail')) {
  $error = "使用できない文字が含まれています";
}

if (!empty($errors)) {
  include "../view/indexhtml.php";
  exit;
}

function length_check($key,$x){
  if (mb_strlen($_POST[$key]) > $x) {
    echo $key."は文字数を超えています。";
  }
}



// $mail_length = length_check('mail', 30);


include "../view/checkhtml.php";
