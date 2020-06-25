<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="conf.php" method="post">
    <input type="text" name="name" placeholder="名前" value='<?php echo $inputText['name']; ?>'>
    <p><?php echo @$errormsg['name']; ?></p>
    <p><?php echo @$errormsg['lengthname']; ?></p>
    <input type="text" name="mail" placeholder="メールアドレス（半角）" value='<?php echo $inputText['mail']; ?>'>
    <p><?php echo @$errormsg['mail']; ?></p>
    <p><?php echo @$errormsg['vmail']; ?></p>
    <p><?php echo @$errormsg['lengthmail']; ?></p>
    <p>
      <label for="">お問い合わせ</label>
    </p>
    <textarea name="info" id="" cols="30" rows="10"><?php echo $inputText['info']; ?></textarea>
    <p><?php echo @$errormsg['info']; ?></p>
    <p><?php echo @$errormsg['lengthinfo']; ?></p>
    <label for="">職種</label>
    <select name="work" id="">
      <option value="sutudent" <?php if ($inputText['work'] == "sutudent") {
                                  echo 'selected="selected"';
                                } ?>>学生</option>
      <option value="worker" <?php if ($inputText['work'] == "worker") {
                                echo 'selected="selected"';
                              } ?>>社会人</option>
      <option value="other" <?php if ($inputText['work'] == "other") {
                              echo 'selected="selected"';
                            } ?>>その他</option>
    </select>
    <p><?php echo @$errormsg['gender']; ?></p>
    <label for="">男性</label>
    <input type="radio" name="gender" value="M" <?php if ($inputText['gender']== "M") {
                                                  echo 'checked="checked"';
                                                } ?>>
    <label for="">女性</label>
    <input type="radio" name="gender" value="F" <?php if ($inputText['gender']== "F") {
                                                  echo 'checked="checked"';
                                                } ?>>
    <p><?php echo @$errormsg['gender'] ?></p>
    <label for="accept">同意する</label>
    <input type="checkbox" name="accept" id="accept" value="on" <?php if ($inputText['accept'] == "on") {
                                                                  echo 'checked="checked"';
                                                                } ?>>
    <p><?php echo @$errormsg['accept']; ?></p>
    <input type="submit" name="send" value="送信">
  </form>
</body>

</html>