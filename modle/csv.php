<?php
$inputtext = [
  array(
      $inputText['name'],
      $inputText['mail'],
      $inputText['info'],
      $inputText['work'],
      $inputText['gender'],
      $inputText['accept']
  )
];

$info = fopen("../csv/info.csv", "a");
foreach ($inputtext as $line) {
  fputcsv($info, $line);
}

fclose($info);

