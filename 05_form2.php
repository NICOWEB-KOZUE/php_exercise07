<?php

$name = '';
$tel = '';
$email = '';
$item_key = '';
$err_msgs = [];

$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

// バリデーション
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name     = $_POST['name'];
    $tel      = $_POST['tel'];
    $email    = $_POST['email'];
    $item_key = $_POST['item_key'];

    if ($name === '') {
        $err_msgs[] = '氏名を入力して下さい';
    }
    if ($tel === '') {
        $err_msgs[] = '電話番号を入力して下さい';
    }
    if ($email === '') {
        $err_msgs[] = 'メールアドレスを入力して下さい';
    }

    if (empty($err_msgs)) {
        $item = $items[$item_key];
        header('Location: 05_confirm.php?item=' . $item);
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>個人情報を入力してください</h3>

    <?php if ($err_msgs): ?>
        <h1>エラーメッセージ</h1>
        <ul>
            <?php foreach ($err_msgs as $m): ?>
                <li><?= $m ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="" method="post">

        <div>
            <label for="name">氏名</label><br>
            <input type="text" id="name" name="name" value="<?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>">
        </div>

        <div>
            <label for="tel">電話番号</label><br>
            <input type="text" id="tel" name="tel" value="<?= htmlspecialchars($tel, ENT_QUOTES, 'UTF-8') ?>">
        </div>

        <div>
            <label for="email">メールアドレス</label><br>
            <input type="text" id="email" name="email" value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>">
        </div>

        <h3>購入するものを選択してください</h3>
        <div>
            <select name="item_key" id="item_key">
                <?php foreach ($items as $key => $label): ?>
                    <option value="<?= $key ?>" <?= ($item_key == $key) ? 'selected' : '' ?>>
                        <?= $label ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <br>
        <div class=" submit">
            <input type="submit" value="送信">
        </div>
    </form>

</body>

</html>
