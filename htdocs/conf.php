<?php
include "../modle/csv.php";
include "../modle/FormCheck.php";

$name = "";
$mail = "";
$info = "";
$accept = "";
$work = "";
$gender = "";
$name = $_POST['name'];
$mail = $_POST['mail'];
$info = $_POST['info'];
$work = $_POST['work'];
if(isset($_POST['gender'])){
    $gender = $_POST['gender'];
}
if(isset($_POST['accept'])){
    $accept = $_POST['accept'];
}

$inputText = [
    'name' => $name,
    'mail' => $mail,
    'info' => $info,
    'work' => $work,
    'gender' => $gender,
    'accept' => $accept
];

$formCheck = new FormCheck();
$errormsg = [];
$errormsg['name'] = $formCheck->check($inputText['name'], 'name');
$errormsg['lengthname'] = $formCheck->lengthCheck($name, 10);
$errormsg['mail'] = $formCheck->check($inputText['mail'], 'mail');
$errormsg['lengthmail'] = $formCheck->lengthCheck($mail, 30);
$errormsg['vmail'] = $formCheck->validationCheck($mail);
$errormsg['info'] = $formCheck->check($inputText['info'], 'info');
$errormsg['lengthinfo'] = $formCheck->lengthCheck($info, 100);
$errormsg['work'] = $formCheck->check($inputText['work'], 'work');
$errormsg['gender'] = $formCheck->check($inputText['gender'], 'gender');
$errormsg['accept'] = $formCheck->check($inputText['accept'], 'accept');


$inputtext = [
    array($inputText['name'],$inputText['mail'],$inputText['info'],$inputText['work'],$inputText['gender'],$inputText['accept'])
];

$info =fopen("../csv/info.csv", "a");
  foreach($inputtext as $line){
    fputcsv($info,$line);
  }

fclose($info);


foreach ($errormsg as $key => $value) {
    if ($errormsg[$key] == NULL) {
        unset($errormsg[$key]);
    }
}

if (!empty($errormsg)) {
    include "../view/indexhtml.php";
    exit;
}

include "../view/confhtml.php";
