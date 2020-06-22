<?php
include "../modle/FormCheck.php";
include "../modle/csv.php";
$name = "";
$mail = "";
$info = "";
$accept = "";
$work = "";
$gender = "";
$errorExistsCheck;



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
if ($formCheck->checkName($naem) != null) {
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
if ($formCheck->checkName($gendaer) != null) {
    $errors['gender'] = $formCheck->checkGender($gender);
}
if ($formCheck->checkName($accept) != null) {
$errors['accept'] = $formCheck->checkAccept($accept);
}

$error = $formCheck->validationCheck($mail);
$lengthErrorName = $formCheck->lengthCheck($name, 10);
$lengthErrorMail = $formCheck->lengthCheck($mail, 30);
$lengthErrorInfo = $formCheck->lengthCheck($info, 100);



if (!empty($errors)) {
    include "../view/indexhtml.php";
    exit;
}

include "../view/confhtml.php";