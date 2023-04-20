<?php
// セッション開始
session_start();
// DBサーバのURL
$db['host'] = "localhost";
// ユーザー名
$db['user'] = "root";
// ユーザー名のパスワード
$db['pass'] = "";
// データベース名
$db['dbname'] = "YIGroupBlog";


      // 2. ユーザIDとパスワードが入力されていたら認証する
      $dsn = sprintf('mysql: host=%s; dbname=%s; charset=utf8', $db['host'], $db['dbname']);

      // 3. エラー処理
      try {
        
        $dbh = new PDO($dsn, $db['user'], $db['pass'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        echo 'DBと接続しました。';
    } catch (PDOException $e) {
        echo 'Error:' . $e->getMessage();
        die();
    }

?>
