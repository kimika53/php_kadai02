<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お気に入り登録</title>
    <style>
        fieldset{
            border: none;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <h3>お気に入り登録</h3>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div>
            <fieldset>
                <label>著者：<br><input type="text" name="author"></label><br><br>
                <label>タイトル：<br><textarea name="title" rows="3" cols="30"></textarea></label><br><br>
                <label>出版社：<br><input type="text" name="publisher"></label><br><br>
                <!-- <label>出版年:<br><input type="month" name="year"></label><br><br>
   -->
                <button type="save">登録</button>
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->
</body>
</html>
