<?php require'utils.php' ; ?>
<?php
	if(is_empty($_GET, 'id')){
	$error = "idを指定してください";
  $page_title = "エラー！！！";
	} else {
	$id =$_GET['id'];
  $post = get_post($id);
  $page_title = "記事編集ページ";
    }
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>記事編集</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <header>
    <?php include 'parts/header.php'; ?>
  </header>
  <div id="main">
    <h2>EDIT  ARTICLE</h2>
    <article>
      <?php if (isset($error)): ?>
      <p><?php echo $error; ?></p>
      <?php elseif(!isset($post)): ?>
      <p><?php echo "id=${id}の記事は存在しません"; ?></p>
      <?php else: ?>
      <form action="post.php" method="post" name="form" enctype="multipart/form-data">
        <label for="title">　　　TITLE
          <input type="text" name="title" class="newTitle" value="<?php echo $post['title']; ?>">
        </label>
        <div class="contents">
          <label for="contents">CONTENTS
            <textarea name="contents" id="" cols="30" rows="10" value="write something!" >
            <?php echo $post['contents']; ?>
            </textarea>
          </label>
          <?php if(!empty($post['image_name'])) : ?>
          <img src="image.php?id=<?php echo $id; ?>" alt="">
        <?php else: ?>
          <img src="images/no_image.png" alt="">
        <?php endif; ?>
          <label for="image">
            画像ファイル
            <input type="file" name="image">
          </label>
        </div><!--contens-->
        <div>
          <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
          <input type="hidden" name="type" value="edit">
          <input type="submit" value="DONE!" class="btn">
        </div>
      </form>
      <?php endif; ?>
      <img src="./images/hover_img001.png" alt="" class="edit-img">
    </article>
  </div><!--main-->
  <footer>
    <?php include 'parts/footer.php'; ?>
  </footer>
</body>
</html>