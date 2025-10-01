<?php
// GETで受け取る
$price = $_GET['price'];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>購入確認</title>
</head>

<body>
    <h1>ご注文ありがとうございます</h1>
    <h1>お支払い金額は、<?= $price ?>円です</h1>
    <p><a href="05_form2.php">戻る</a></p>
</body>

</html>
