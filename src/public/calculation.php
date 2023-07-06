<?php
$pyramidStepNum = filter_input(INPUT_POST, 'peopleNum');
$peopleNum = 0;
for ($i = 1; $i <= $pyramidStepNum; $i++) {
    $peopleNum += $i;
}
?>

<!-- 以下はHTMLのコードになります -->
<!-- 今は「こんな処理をしているんだな〜」とざっくり見ていただけたらと思います！ -->
<!DOCTYPE html>
<html lang="ja">

<!-- headタグの中の処理で、ブラウザのタブに表示されるタイトルを設定しています -->
    <head>
        <meta charset="UTF-8">
        <title>ピラミッドに必要な人数の計算結果</title>
    </head>
    <!-- bodyタグの中の処理で、ブラウザ上に表示させる「タイトル」や、別の画面に遷移する「ボタン」を作成しています -->
    <body>
        <h1>結果</h1>
        <h2><?php echo $pyramidStepNum .
            '段のピラミッドに必要な人数: ' .
            $peopleNum; ?></h2>
            <a href="index.php">
                <button type="button">もう一度計算する</button>
            </a>
        </p>
    </body>
</html>