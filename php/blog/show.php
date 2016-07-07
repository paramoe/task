  <?php require'utils.php' ; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Blog</title>
  <link rel="stylesheet" href="css/style.css">

  
</head>
<body>
  <header>
    <h1>ブログ詳細</h1>

  </header>


<div id="contents">

<div id="article">


  <?php
  if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "select * from posts where id = ${id}";
    $stmt = $db->query($sql);
    if($stmt ->rowCount() == 0){
      echo "指定された記事がありません";
    } else {
    foreach ($stmt as $row) {
      $post = $row;
    }
    }
  } else {
    echo "idが指定されていません";
  }
  ?>
  <?php if (isset($post)){ ?>
  <p class="title"><?php echo $post['title']; ?></p>
  <div class="left">
    <p class="contents"> <?php echo $post['contents']; ?></p>
    <img src="image.php?id=<?php echo $id; ?>" alt="">
    <p class="created">投稿日時 <?php echo $post['created']; ?></p>
    <p class="updated">更新日時 <?php echo $post['updated']; ?></p>
  </div><!--left-->
  <div class="right">
    <div class="box">
      <img src="./images/musicbomb.jpg" alt="" class="image-show">
    </div><!--box-->
  </div><!---right-->
  <?php } ?>
 </div><!--contents-->
</div><!--article-->
<p>
<div class="wrap">
  <div class="arrow"></div>
    <div class="sentense">
      <a href="/" class="back-top">Go back to TOP</a>
    </div>
</div>
</p>

<footer>
  <?php include'parts/footer.php'; ?>
</footer>
</body>
</html>
