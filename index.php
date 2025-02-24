<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>書籍</legend>
                <label>書籍名：<input type="text" name="name"></label><br>
                <label>URL：<input type="text" name="URL"></label><br>  
                <label><textArea name="text" rows="4" cols="40"></textArea></label><br>
                <label>登録日付：<input type="text" name="date"></label><br>
                <input type="submit" value="送信">
                <!-- name="mail" →URLに変更  、dateを追加 -->
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->
</body>
</html>
