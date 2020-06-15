<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="complete.php" method="post">
    <input type="text" name="name" placeholder="名前" value='<?php echo $name; ?>'>
    <p><?php echo @$errors['name']; ?></p>
    <input type="text" name="mail" placeholder="メールアドレス（半角）" value='<?php echo $mail; ?>'>
    <p><?php echo @$errors['mail']; ?></p>
    <p><?php echo @$error; ?></p>
    <p>
      <label for="">お問い合わせ</label>
    </p>
    <textarea name="info" id="" cols="30" rows="10"><?php echo $info; ?></textarea>
    <p><?php echo @$errors['info']; ?></p>
    <select name="work" id="">
      <option value="">未選択</option>
      <option value="sutudent" <?php if (@$_POST['work'] == "sutudent") {
                                  echo 'selected="selected"';
                                } ?>>学生</option>
      <option value="worker" <?php if (@$_POST['work'] == "worker") {
                                echo 'selected="selected"';
                              } ?>>社会人</option>
      <option value="other" <?php if (@$_POST['work'] == "other") {
                              echo 'selected="selected"';
                            } ?>>その他</option>
    </select>
    <p><?php echo @$errors['work']; ?></p>
    <label for="" id="male">男性</label>
    <input type="radio" name="example" value="M" id="male" <?php if (@$_POST['example'] == "M") {
                                                              echo 'checked="checked"';
                                                            } ?>>
    <label for="" id="female">女性</label>
    <input type="radio" name="example" value="F" id="female" <?php if (@$_POST['example'] == "F") {
                                                                echo 'checked="checked"';
                                                              } ?>>
    <p><?php echo @$errors['example']; ?></p>
    <label for="accept">同意する</label>
    <input type="checkbox" name="accept" id="accept" value="on" <?php if (@$_POST['accept'] == "on") {
                                                                  echo 'checked="checked"';
                                                                } ?>>
    <p><?php echo @$errors['accept']; ?></p>
    <input type="submit" name="send" value="送信">
  </form>
</body>

</html>