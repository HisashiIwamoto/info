<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>name:<?php echo $_POST['name']; ?></p>
  <p>mail:<?php echo $_POST['mail']; ?></p>
  <p>info:<?php echo $_POST['info']; ?></p>
  <p>work:<?php echo $_POST['work']; ?></p>
  <p>gender:<?php echo $_POST['gender']; ?></p>
  <p>accept:<?php echo $_POST['accept']; ?></p>
  <p>入力内容確認</p>
  <form action="conf.php" method="post">
    <input type="hidden" name="answer" value="1">
    <input type="button" value="OK" name="answer">
    <input type="hidden" name="answer" value="0">
    <input type="button" value="再入力" name="answer">
  </form>
</body>

</html>