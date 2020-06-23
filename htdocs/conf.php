<?php
include "../modle/FormCheck.php";
include "../modle/csv.php";
$inputText = [
    'name',
    'mail',
    'info',
    'work',
    'gender',
    'accept'
];

foreach ($inputText as $key) {
    if (isset($_POST[$key])) {
        $inputText[$key] = $_POST[$key];
    }
}
$formCheck = new FormCheck();
foreach ($inputText as $key) {
    $formCheck->errorMessage($inputText[$key], $key);
    var_dump($formCheck->errorMessage($inputText[$key], $key));
}


if (!empty($errors)) {
    include "../view/indexhtml.php";
    exit;
}

include "../view/confhtml.php";
