<?php
include "../modle/FormCheck.php";

$name = "";
$mail = "";
$info = "";
$accept = "";
$work = "";
$gender = "";

if (isset($_POST['name'])) {
    $name = $_POST['name'];
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
if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
}
if (isset($_POST['accept'])) {
    $accept = $_POST['accept'];
}
$formCheck = new FormCheck();
$errors['name'] = $formCheck->checkName($name);

$errors['mail'] = $formCheck->checkMail($mail);
$errors['info'] = $formCheck->checkInfo($info);
$errors['work'] = $formCheck->checkWork($work);
$errors['gender'] = $formCheck->checkGender($gender);
$errors['accept'] = $formCheck->checkAccept($accept);


$nailInputCheck = $formCheck->validationCheck($mail);
var_dump($nailInputCheck);
$lengthErrorName = $formCheck->lengthCheck($name, 10);
$lengthErrorMail = $formCheck->lengthCheck($mail, 30);
$lengthErrorInfo = $formCheck->lengthCheck($info, 100);


if (!empty($errors)) {
    include "../view/indexhtml.php";
    exit;
}

include "../view/confhtml.php";
