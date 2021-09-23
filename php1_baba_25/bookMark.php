

<!-- Main[Start] -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>

</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insertSelect.php">
  <div class="jumbotron">
   <fieldset>
    <legend>URL Stock</legend>
     <label>TITLE：<input type="text" name="title"></label><br>
     <label>URL：<input type="text" name="url"></label><br>
     <label>CONTENT:<textArea name="contents" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->
<div>
    <div class="container jumbotron">閲覧履歴<?=$view?></div>
</div>


</body>
</html>
