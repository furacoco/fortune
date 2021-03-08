<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>coffee占い</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="wrapper">
        <header>
            <div class="header-logo">coffee占い</div>
        </header>
        <main>
            <h1>あなたの基本性格</h1><br>
            <p>あなたはいつもどのコーヒーを選びますか？</p>
            <div class="form-box">
                <form action="result.php" method="POST">
                    <label>
                        <input type="radio" title="favorite" name="favorite" value="ブラックコーヒー">ブラックコーヒー
                    </label>
                    <label>
                        <input type="radio" title="favorite" name="favorite" value="カフェオレ">カフェオレ
                    </label>
                    <label>
                        <input type="radio" title="favorite" name="favorite" value="キャラメルマキアート">キャラメルマキアート
                    </label>
                    <button type="submit" class="result-button">占う</button>
                </form>
            </div>
        </main>
        <footer>
            <small> &copy; furacoco</small>
        </footer>
    </div>
</body>

</html>