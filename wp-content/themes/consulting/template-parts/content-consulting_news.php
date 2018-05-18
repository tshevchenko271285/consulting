<h1><?php the_title(); ?></h1>
<div class="row">
    <div class="col-md-4">
        <?php
            if( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else {
                echo '<img src="' . get_template_directory_uri() . '/no-image.png;" alt="Consulting no image post">';
            }
        ?>
    </div>
    <div class="col-md-8">
        <?php the_content(); ?>
    </div>
</div>
<div class="row">
    <div class="col-6">Автор: <?php the_author(); ?></div>
    <div class="col-6">Дата публикации поста: <?php the_date(); ?></div>
</div>