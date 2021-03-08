<?php
if (isset($_POST['favorite'])) {
    $favorite = $_POST['favorite'];
    if ($favorite == 'ブラックコーヒー') {
        $result = 'あなたは真面目で真っ直ぐな性格です。';
    } elseif ($favorite == 'カフェオレ') {
        $result = 'あなたは優しくて心が温かい性格です。';
    } elseif ($favorite == 'キャラメルマキアート') {
        $result = 'あなたは甘えん坊で可愛がられる性格です。';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>coffee占い</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="wrappaer">
        <header>
            <div class="header-logo">coffee占い</div>
        </header>
        <main>
            <h1>結果は・・・</h1>
            <div class="result-box">
                <p class="result-word">
                    <?= $favorite ?> を選んだあなたは・・<br>
                    <?= $result ?></p>
                <p><a class="red" href="index.php">⇒もう一度占う</a></p>
            </div>
        </main>
        <footer>
            <small>&copy;furacoco</small>
        </footer>
    </div>
</body>

</html>