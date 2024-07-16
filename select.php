<?php
// 1.  DB接続します
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=gs_db_class;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
  exit('DBConnectError:' . $e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bookmark_table");

// 保存ボタンを押すのに相当する
// 成功 = true 失敗 = false が入る
$status = $stmt->execute();

//３．データ表示
if ($status == false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:" . $error[2]);
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ブックマーク一覧</title>
  <link href="css/style.css" rel="stylesheet">
</head>

<body id="main">
  <header>
    <nav>
      <a href="index.php">ブックマーク登録</a>
    </nav>
  </header>

  <main>
    <div class="container">
      <h1>ブックマーク一覧</h1>
      <input type="text" id="search-input" placeholder="検索...">
    <table>
    <tr>
        <th>日付</th>
        <th>サイト名</th>
        <th>URL</th>
        <th>コメント</th>
    </tr>
    <?php while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <tr>
            <td><?= htmlspecialchars($result['date'], ENT_QUOTES, 'UTF-8') ?></td>
            <td><?= htmlspecialchars($result['book_name'], ENT_QUOTES, 'UTF-8') ?></td>
            <td><a href="<?= htmlspecialchars($result['book_url'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($result['book_url'], ENT_QUOTES, 'UTF-8') ?></a></td>
            <td><?= htmlspecialchars($result['book_comment'], ENT_QUOTES, 'UTF-8') ?></td>
        </tr>
    <?php endwhile; ?>
  </table>
    </div>
  </main>
  <script src='js/script.js'></script>
</body>

</html>