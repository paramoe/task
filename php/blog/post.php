<?php require "utils.php"; ?>
<?php 

//編集と新規作成の判定
$mode = 'new';
if( is_edit($_POST, 'type')){
  $mode = 'edit';
  $id = $_POST['id'];
}

if(is_empty($_POST, 'title')){
  $error = "タイトルを設定してください";
} else if (is_empty($_POST, 'contents')){
  $error = "内容を設定してください";
} else { 
  $title = $_POST['title'];
  $contents = $_POST['contents'];
  $image = $_FILES['image'];

  if ($mode == 'edit'){
    update_post($id, $title, $contents, $image);
  } else {
    $image = $_FILES['image'];
   create_post($title, $contents, $image);
  }

}

  if (empty($error)){
    $page_title = "記事を作成しました";
} else {
  $page_title = "エラー!!!!!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>記事作成しました</title>
  <link rel="stylesheet" href="./css/style.css">

</head>
<body>
  <header>
    <h1>message</h1>
    <img src="./images/btn.png" alt="" class="img-top">
  </header>
  <div id="message">
    <h2>
      <?php echo $page_title ?>
    </h2>
  </div><!--message-->
  <div id="contents">
    <?php if(!empty($error)): ?>
    <div id="message">
      <?php echo $error; ?>
    </div><!--message-->
    <?php if ($mode =='edit') : ?>
    <a href="edit.php?id=<?php echo $id; ?>">記事編集画面に戻る</a>
    <?php else: ?>
    <a href="new.php" class="back-create">記事作成ページに戻る</a>
    <?php endif; ?>
    <?php endif; ?>
    <a href="index.php" class="back-top">TOPに戻る</a>
  </div><!--contents-->
  <footer>
    <?php include "parts/footer.php"; ?>
  </footer>
</body>
</html>