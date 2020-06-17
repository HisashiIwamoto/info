<?php
if (isset($_POST['answer'])) {
    $answer = $_POST['answer'];
    if ($answer == 0) {
        include "../view/indexhtml.php";
    } else {
        include "../view/completa.html.php";
    }
}

