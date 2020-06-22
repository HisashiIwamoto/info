<?php
$header =array('名前','メールアドレス','お問い合わせ','仕事','性別','同意');
$inputtext = [
    array($_POST['name'],$_POST['mail'],$_POST['info'],$_POST['work'],$_POST['gender'],$_POST['accept'])
];


$info =fopen("../csv/info.csv", "a");
  foreach($inputtext as $line){
    fputcsv($info, $line);
  }

fclose($info);