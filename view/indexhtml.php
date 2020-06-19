<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="conf.php" method="post">
    <input type="text" name="name" placeholder="名前" value='<?php
                                                            if (isset($_POST['name'])) {
                                                              echo $_POST['name'];
                                                            }
                                                            ?>'>
    <p><?php echo @$lengthErrorName; ?></p>
    <p><?php echo @$errors['name']; ?></p>
    <input type="text" name="mail" placeholder="メールアドレス（半角）" value='<?php
                                                                    if (isset($_POST['mail'])) {
                                                                      echo $_POST['mail'];
                                                                    }
                                                                    ?>'>
    <p><?php echo @$error; ?></p>
    <p><?php echo @$errors['mail'] ; ?></p>
    <p><?php echo @$lengthErrorMail; ?></p>
    <p>
      <label for="">お問い合わせ</label>
    </p>
    <textarea name="info" id="" cols="30" rows="10"><?php
                                                    if (isset($_POST['info'])) {
                                                      echo $_POST['info'];
                                                    }
                                                    ?></textarea>
    <p><?php echo @$errors['info'] ; ?></p>
    <p><?php echo @$lengthErrorInfo; ?></p>
    <label for="">職種</label>
    <select name="work" id="">
      <option value="">未選択</option>
      <option value="sutudent" <?php if (isset($_POST['work']) == "sutudent") {
                                  echo 'selected="selected"';
                                } ?>>学生</option>
      <option value="worker" <?php if (isset($_POST['work']) == "worker") {
                                echo 'selected="selected"';
                              } ?>>社会人</option>
      <option value="other" <?php if (isset($_POST['work']) == "other") {
                              echo 'selected="selected"';
                            } ?>>その他</option>
    </select>
    <p><?php echo @$errors['gender'] ; ?></p>
    <label for="">男性</label>
    <input type="radio" name="gender" value="M" <?php if (isset($_POST['gender']) == "M") {
                                                  echo 'checked="checked"';
                                                } ?>>
    <label for="">女性</label>
    <input type="radio" name="gender" value="F" <?php if (isset($_POST['gender']) == "F") {
                                                  echo 'checked="checked"';
                                                } ?>>
    <p><?php echo @$errors['accept']; ?></p>
    <label for="accept">同意する</label>
    <input type="checkbox" name="accept" id="accept" value="on" <?php if (isset($_POST['accept']) == "on") {
                                                                  echo 'checked="checked"';
                                                                } ?>>
    <p><?php echo @$inputaccept; ?></p>
    <input type="submit" name="send" value="送信">
  </form>
</body>

</html>