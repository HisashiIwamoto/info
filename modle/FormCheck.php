<?php
class FormCheck
{
  public $inputTexts = [
    'name' => "",
    'mail' => "",
    'info' => "",
    'work' => "",
    'gender' => "",
    'accept' => ""
  ];

  public $errors = [];

  public $emptyError = [
    'neme' => '未入力',
    'mail' => '未入力',
    'info' => '未入力',
    'work' => '未選択',
    'gender' => '未選択',
    'accept' => '同意が必要'
  ];


  public function __construct($inputTexts = [])
  {
    $this->inputTexts = $inputTexts;
    foreach ($inputTexts as $key) {
      if (isset($_POST[$key])) {
        if (!empty($_POST[$key])) {
        } else {
          $errors[$key] = $key . "が未入力です";
        }
      }
    }
  }

  function getText($text)
  {
    if (isset($text)) {
      return $text;
    }
    return "";
  }




  public $CharacterLength = [
    'name' => 15
  ];

  function lengthCheck($text, $key)
  {
    if (mb_strlen($text) > $this->lengthcheck[$key]) {
      echo $key . "は文字数を超えています。";
    }
  }


  public function CheckErrorExists()
  {
    if (!empty($errors)) {
      include "../view/indexhtml.php";
      exit;
    }
  }

  public $pattern = "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
  public $error = "";
  public function ValidationCheck($error)
  {
    if (!preg_match($this->pattern, 'mail')) {
      $error = "使用できない文字が含まれています";
      return $error;
    }
  }
}

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