<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
   <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> 
</head>
<body>
  <h1>ぱらもえのテーマ</h1>
  <?php if (have_posts()): ?>
    <?php while(have_posts()): ?>
      <?php the_post(); ?>
      <p class="date"><?php echo get_the_date(); ?></p>
      <p class="category"><?php the_category(); ?></p>
      <p class="tags"><?php the_tags(); ?></p>
      <p>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </p>
      <?php the_post_thumbnail(); ?>
      <p><?php the_content(); ?></p>
    <?php endwhile; ?>
  <?php endif; ?>
</body>
</html>