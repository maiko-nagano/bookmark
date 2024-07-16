<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ブックマーク登録</title>
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav>
            <a href="select.php">ブックマーク一覧</a>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <main>
        <form method="POST" action="insert.php">
            <fieldset>
                <legend>ブックマーク登録</legend>
                <label for="book_name">サイト名</label>
                <input type="text" id="book_name" name="book_name" required placeholder="タイトル">

                <label for="book_url">URL</label>
                <input type="text" id="book_url" name="book_url" required placeholder="https://xxx.com">

                <label for="book_comment">コメント</label>
                <textarea id="book_comment" name="book_comment" rows="4" required placeholder="メモを残しましょう"></textarea>

                <input type="submit" value="送信する">
            </fieldset>
        </form>
    </main>
    <!-- Main[End] -->


</body>

</html>