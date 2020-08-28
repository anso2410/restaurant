

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


<main class="container">

    <section class ="bg-image  ">

        <div class=" test text">
            <p class="meal">For a happy day</p>

            <?php  while(have_posts()) : the_post();?>

<?php the_content(); ?>
<?php endwhile; ?>

        </div>
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

        <div class="hachBlack">
            <img src="<?php echo theme_images('hachures-blanches.png') ?>" alt="image"></div>
    </section>
    </main>


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
                <?php   echo "<p>$the_title<p/>";
                echo $text;?>

            </div>


            <?php
            do_action( 'plugins/wp_subtitle/the_subtitle', array(
                'before'        => '<p class="subtitle">',
                'after'         => '</p>',
                'post_id'       => get_the_ID(),
                'default_value' => ''
            ) );
            ?>
            <div class="subtitle">
                <?php  echo  "<p >$subtitle</p>";?>
            </div>
            <div class="content">
                <?php  echo  "<p >$the_content</p>"; ?>


            </div>



        </div>
    </section>
<section>
    <div class="original">
        <div></div>
        <div></div>
    </div>
    <div class="restoBrussel">
        <div></div>
        <div></div>
    </div>
    <div class="outssiplou">
        <div></div>
        <div></div>
    </div>
</section>

</div>

<?php get_footer() ?>
</body>
</html>