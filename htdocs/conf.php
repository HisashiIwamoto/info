<?php
include "../modle/FormCheck.php";
include "../modle/csv.php";

$name = "";
$mail = "";
$info = "";
$work = "";
$gender = "";
$accept = "";
$errorExistsCheck;

$name = $_POST['name'];
$mail = $_POST['mail'];
$info = $_POST['info'];
$work = $_POST['work'];
$gender = $_POST['gender'];
$accept = $_POST['accept'];

$inputtext= [
    'name'=>$name,
    'mail'=>$mail,
    'info'=>$info,
    'work'=>$work,
    'gender'=>$gender,
    'accept'=>$accept
];
foreach($inputtext as $key){
    echo $inputtext;
}

$formCheck = new FormCheck();
if ($formCheck->checkName($name) != null) {
    $errors['name'] = $formCheck->checkName($name);
}
if ($formCheck->checkName($mail) != null) {
    $errors['mail'] = $formCheck->checkMail($mail);
}
if ($formCheck->checkName($info) != null) {
    $errors['info'] = $formCheck->checkInfo($info);
}
if ($formCheck->checkName($work) != null) {
    $errors['work'] = $formCheck->checkWork($work);
}
if ($formCheck->checkName($gender) != null) {
    $errors['gender'] = $formCheck->checkGender($gender);
}
if ($formCheck->checkName($accept) != null) {
    $errors['accept'] = $formCheck->checkAccept($accept);
}
$nailInputCheck = $formCheck->validationCheck($mail);
$lengthErrorName = $formCheck->lengthCheck($name, 10);
$lengthErrorMail = $formCheck->lengthCheck($mail, 30);
$lengthErrorInfo = $formCheck->lengthCheck($info, 100);


// var_dump($errors);
if (!empty($errors)) {
    include "../view/indexhtml.php";
    exit;
}

include "../view/confhtml.php";
