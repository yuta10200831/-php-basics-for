<!-- 以下はHTMLのコードになります -->
<!-- 今は「こんな処理をしているんだな〜」とざっくりみていただけたらと思います！ -->

<!DOCTYPE html>
<html lang="ja">
    <!-- headタグの中の処理で、ブラウザのタブに表示されるタイトルを設定しています -->
    <head> 
        <meta charset="UTF-8">
        <title>ピラミッドに必要な人数の計算</title>
    </head>
    <!-- bodyタグの中の処理で、ブラウザ上に表示させる「タイトル」や、別の画面に遷移する「ボタン」を作成しています -->
    <body>
        <h1>ピラミッドに必要な人数の計算</h1>
        <h2>ピラミッドに必要な人数を確認しよう！</h2>
        <form action="calculation.php" method="POST">
            <input type="number" name="peopleNum" value="必要な人数を確認する">
            <button type="submit" name="button">確認</button>
        </form>
    </body>
</html>