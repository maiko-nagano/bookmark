<?php
// 1. POSTデータ取得
$book_name = $_POST['book_name']; // ブックマーク名を取得
$book_url = $_POST['book_url']; // URLを取得
$book_comment = $_POST['book_comment']; // コメントを取得

// 2. URLのバリデーション
if (filter_var($book_url, FILTER_VALIDATE_URL)) {
    // 正しいURLの場合の処理
    // データベースに登録などの処理を追加してください

    // 3. DB接続します
    try {
        // ID:'root', Password: xamppは 空白 ''
        $pdo = new PDO('mysql:dbname=gs_db_class;charset=utf8;host=localhost', 'root', '');
    } catch (PDOException $e) {
        exit('DBConnectError:' . $e->getMessage());
    }

    // 4. データ登録SQL作成
    $stmt = $pdo->prepare("INSERT INTO gs_bookmark_table(book_name, book_url, book_comment, date) VALUES(:book_name, :book_url, :book_comment, NOW())");

    // 5. バインド変数を用意
    // Integer 数値の場合 PDO::PARAM_INT
    // String文字列の場合 PDO::PARAM_STR
    $stmt->bindValue(':book_name', $book_name, PDO::PARAM_STR);
    $stmt->bindValue(':book_url', $book_url, PDO::PARAM_STR);
    $stmt->bindValue(':book_comment', $book_comment, PDO::PARAM_STR);

    // 6. 実行
    $status = $stmt->execute();

    // 7. データ登録処理後
    if ($status === false) {
        // SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
        $error = $stmt->errorInfo();
        exit('ErrorMessage:' . $error[2]);
    } else {
        // 8. index.phpへリダイレクト
        header("Location: index.php");
    }
} else {
    // 正しくないURLの場合の処理
    echo '無効なURLです。<br>'; // 改行を追加
    echo '<a href="index.php">ブックマーク登録画面に戻る</a>'; // リンクを表示
}
?>