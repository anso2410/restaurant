

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/style.css'; ?>">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
<?php  get_header()?>
</head>
<body>
<div class="container">
    <div class ="bg-image  ">
        <div class="text test">
<?php  while(have_posts()) : the_post();?>
<!--<h1> <?php //the_title(); ?></h1>-->
<?php the_content(); ?>
<?php endwhile; ?>
        </div>
    </div>
</div>
<?php get_footer() ?>
</body>
</html>