<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name') ?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
<body>
<div class="jumbotron jumbotron-fluid">
<div class="container text-center">
    <h1><?php bloginfo('name') ?></h1>
    <span><?php bloginfo('description') ?></span>
  </div>   
 </div>
  <header>
      <?php wp_nav_menu(); ?>
    </header>
  <div class="container">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <h3><?php the_title(); ?></h3>
        </a>

        Written by <?php the_author(); ?><br>
        Date <?php the_date(); ?> <br>
        <?php
            if (has_post_thumbnail()) :
              the_post_thumbnail();

            else : echo "NOT FOUND";
            endif
            ?>

        <div class="main">
          <p><?php the_excerpt(); ?></p>
        </div>

      <?php endwhile; ?>
    <?php endif; ?>
    <a class="btn btn-primary" href="<?php the_permalink(); ?>">More Info</a>
  </div>

</body>

</html>