<?php require'utils.php' ; ?>
<?php 
$page_title = "NEW"; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>記事新規作成</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <header>
    <?php include 'parts/header.php'; ?>
  </header>
  <div id="main">
    <h2>CREATE  NEW  ARTICLE</h2>
    <article>
      <form action="post.php" method="post" name="form" enctype="multipart/form-data">
          <label for="title">TITLE
            <input type="text" name="title" class="newTitle" value="what do you want to tell?">
          </label>
        <div class="contents">
          <label for="contents">CONTENTS
            <textarea name="contents" id="" cols="30" rows="10" value="write something!" >write something!
            </textarea>
          </label>
          <div>
            <label for="image">
              画像
              <input type="file" name="image">
            </label>
          </div>
        </div><!--counts-->
        <div>
          <input type="submit" value="DONE!" class="btn">
        </div>
      </form>
      <img src="./images/hover_img001.png" alt="" class="img-article">
    </article>
  </div><!--main-->
  <footer>
    <?php include 'parts/footer.php'; ?>
  </footer>
</body>
</html>