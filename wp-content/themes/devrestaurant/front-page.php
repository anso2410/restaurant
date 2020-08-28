

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/style.css'; ?>">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php  get_header()?>
</head>
<body>

<!--Banner Top -->
<main class="container">
    <section class ="bg-image  ">
        <div class=" test text">
            <p class="meal">For a happy day</p>
                <?php  while(have_posts()) : the_post();?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
        </div>
<!--Cards -->
        <section class="icone ">
            <div class="card">
                <h6 class="text-icone">QUALITY FOODS</h6></div>
            <div class="card">
                <h6 class="text-icone">FASTEST DELIVERY</h6>
            </div>
            <div class="card">
                <H6 class="text-icone">ORIGINAL RECIPES</H6>
            </div>
        </section>
<!-- hachures -->
        <div class="hachBlack">
            <img src="<?php echo theme_images('hachures-blanches.png') ?>" alt="image">
        </div>
    </section>


<!--the CHEF -->
    <section class="chief">
        <?php echo  wp_get_attachment_image( 40, 'chief');?>
        <div class="discover">
            <?php
            $id = 47;
            $post = get_post($id);
            $the_content = $post->post_content;
            $the_title = $post->post_title;
            $subtitle = $post->post_subtitle;
            ?>
            <div class="titre">
                <?php   echo "<p>$the_title<p/>";?>

            </div>
            <?php
            do_action( 'plugins/wp_subtitle/the_subtitle', array(
                'before'        => '<p class="subtitle">',
                'after'         => '</p>',
                'post_id'       => get_the_ID(),
                'default_value' => ''
            ) );
            ?>
            <div>
                <?php  echo  "<p >$the_content</p>";?>
                <?php  echo  "<p >$subtitle</p>";
                echo $text;?>
            </div>
        </div>
    </section>

<!-- our Restaurants-->

    <section class="franchise">
        <div class="hachBlack2">
            <img src="<?php echo theme_images('hachures-blanches.png') ?>" alt="image">
        </div>
        <div class="restaurant">
            <?php
            $id = 63;
            $post = get_post($id);
            $the_content = $post->post_content;
            $the_title = $post->post_title;
            $subtitle = $post->post_subtitle;
            ?>

            <div class="titre-franchise">
                <?php   echo "<p >$the_title<p/>"; ?><br>
            </div>
            <?php
            do_action( 'plugins/wp_subtitle/the_subtitle', array(
            'before'        => '<p class="subtitle">',
            'after'         => '</p>',
            'post_id'       => get_the_ID(),
            'default_value' => ''
            ) );
            ?>
            <div>
                <?php   echo "<p>$subtitle<p/>"; ?>
            </div>
        </div>

        <div class="container-post">
            <div class="bg-opcity">
            <div class="img-original" >
                <?php echo  wp_get_attachment_image( 66, 'cafet');?>
            </div>
            </div>
        <div class="original-text">
            <?php
            $id = 67;
            $post = get_post($id);
            $the_content = $post->post_content;
            $the_title = $post->post_title;
            $subtitle = $post->post_subtitle;
            ?>
            <?php   echo "<p >$the_title<p/>"; ?><br>
          <?php  do_action( 'plugins/wp_subtitle/the_subtitle', array(
            'before'        => '<p class="subtitle">',
                'after'         => '</p>',
            'post_id'       => get_the_ID(),
            'default_value' => ''
            ) ); ?>

            <?php  echo  "<p class='cafet'>$the_content</p>";?>
            <?php  echo  "<p  >$subtitle</p>"; ?><br>

        </div>



        </div>
</section>

</div>
</main>
<?php get_footer() ?>
</body>
</html>