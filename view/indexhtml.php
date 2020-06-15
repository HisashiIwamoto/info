<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="complete.php" method="post">
        <label for="">名前</label>
        <input type="text" name="name" value='<?php echo $name; ?>'>
        <p><?php echo @$errors['name'];?></p>
        <label for="">メールアドレス</label>
        <input type="text" name="mail" value='<?php echo $mail; ?>'>
        <p><?php echo @$errors['mail'];?></p>
        <p><?php echo @$error;?></p>
        <label for="">お問い合わせ</label>
        <textarea name="info" id="" cols="30" rows="10"><?php echo $info; ?></textarea>
        <p><?php echo @$errors['info'];?></p>
        <select name="work" id="">
            <option value="0">未選択</option>
            <option value="1">学生</option>
            <option value="2">社会人</option>
            <option value="3">その他</option>
        </select>
        <label for="" id="male">男性</label>
        <input type="radio" name="example" value="<?php echo $example; ?>" id="male">
        <label for="" id="female">女性</label>
        <input type="radio" name="example" value="<?php echo $example; ?>" id="female">
        <p><?php echo @$errors['example'];?></p>
        <label for="accept">同意する</label>
        <input type="checkbox" value="同意する" name="accept" id="accept" value="<?php echo $accept; ?>">
        <p><?php echo @$errors['accept'];?></p>
        <input type="submit" name="send" value="送信">
    </form>
</body>

</html>