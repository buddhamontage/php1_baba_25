<!--  -->

<?php
//入力チェック(受信確認処理追加)
if(
  !isset($_POST["title"]) || $_POST["title"]=="" ||
  !isset($_POST["url"]) || $_POST["url"]=="" ||
  !isset($_POST["contents"]) || $_POST["contents"]==""
){
  exit('ParamError');
}


//1. POSTデータ取得
$title = $_POST["title"];
$url = $_POST["url"];
$contents = $_POST["contents"];




//2. DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=php1_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO php1_db_table(id, title, url, contents,
indate )VALUES(NULL, :a1, :a2, :a3, sysdate())");

/*$sql = "INSERT INTO gs_db_table(id,name,email,naiyou,indate)VALUES(NULL,:a1,:a2,:a3,sysdate())";
 $stmt = $pdo->prepare($sql);*/


$stmt->bindValue(':a1', $title, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $contents, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();



//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);

}else{
  //５．index.phpへリダイレクト
  header("Location: bookMark.php");
  exit;

}


//1.  DB接続します
try {
  $pdo = new PDO('mysql:dbname=php1_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM php1_db_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

} else {
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= "<p>".$result["id"]."-".$result["title"].$result["url"].$result["contents"].$result["indate"]."</p>";
  }

}


?>
