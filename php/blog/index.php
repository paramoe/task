<?php require'utils.php'; ?>
<?php 
  $page_title = "TOP";
  $offset = get_offset();
  $limit = 5;
  $count = get_posts_count();
  $stmt = get_db()->query("select * from posts order by updated desc limit ${limit} offset ${offset}");
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Blogトップページ</title>
  <link rel="stylesheet" href="./css/style.css">

</head>
<body>
<header>
  <?php include 'parts/header.php'; ?>
</header>

  <div id="contents">
    <div class="pager">
      <h2>Menu</h2>
      <?php if ($offset > 0) : ?>
      <a href="?offset=<?php echo get_prev_offset($limit); ?>" class="prev">前へ</a>
      <?php endif; ?>
      <?php if ($offset + $limit < $count) : ?>
      <a href="?offset=<?php echo get_next_offset($limit); ?>" class="next">次へ</a>
      <?php endif; ?>
    </div><!--pager-->
      <a href="new.php" class="create">Create new article</a>
      <h2>Which do you want to read?<span>総件数： <?php echo $count; ?></span></h2>

      <?php foreach($stmt as $row)  : ?>
      <?php $id = $row['id']; ?>
      <article>
        <a href="show.php?id=<?php echo $row['id']; ?>" title="" class="title">
        <?php echo($row['title']); ?>
        </a>
        <?php echo $row['updated']; ?>
        <a href="delete.php?id=<?php echo $id; ?>" class="delete">DELETE</a>
        <a href="edit.php?id=<?php echo $id; ?>" class="edit">EDIT</a>

 
      </article>
      <?php  endforeach; ?>
  </div><!--contents-->
<footer>
    <?php include 'parts/footer.php'; ?>
  </footer>

<script>
   var dels =  document.getElementsByClassName('delete');
   for (var i=0; i<dels.length; i++){
    dels[i].addEventListener('click',function(e){
      if (confirm('削除してよろしいですか？')){
        return true;
      } else {
        e.preventDefault();
        return false;
      }
    });
   }
</script>
</body>
</html>