

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/style.css'; ?>">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php  get_header()?>
</head>
<body>


<div class="container">

    <div class ="bg-image  ">

        <div class=" test">
            <p class="meal">For a happy day</p>

            <?php  while(have_posts()) : the_post();?>

<?php the_content(); ?>
<?php endwhile; ?>

        </div>
        <div class="hachBlack">
            <img src="<?php echo theme_images('hachures-blanches.png') ?>" alt="image"></div>
    </div>
    </div>

    <div class="chief">
        <?php echo  wp_get_attachment_image( 40, 'chief');?>
    </div>
    <div class="discover">

    </div>
</div>

<?php get_footer() ?>
</body>
</html>