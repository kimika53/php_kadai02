<?php
//security設定
require_once('funcs.php');

//1.  DB接続します
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=booklist;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM booklist_table");
$status = $stmt->execute(); ///実行した結果、成功か、falseか、

//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= "<p>"; /// 「. 」がないと、上書きされてしまう
    $view .= h($result['author']) .'|' .h($result['title']) .'|' .h($result['publisher']) ;
    $view .= "</p>";
  }

}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お気に入り登録</title>
    <style>
        .container{
           background-color: silver;
        }
    </style>
</head>

<body>
  <header>
      <h3>お気に入り登録</h3>
  </header>
  <div>
    <div class="container"><?= $view ?></div>
  </div>
</body>
</html>
