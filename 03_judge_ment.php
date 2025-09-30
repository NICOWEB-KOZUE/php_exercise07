<?php
$judge = $_GET['judge_ment'];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>判定表示</title>
</head>

<body>
    <?php if ($judge !== ''): ?>
        <h1><?= $judge ?>です</h1>
        <p><a href="03_form2.php">戻る</a></p>
    <?php endif; ?>
</body>

</html>
