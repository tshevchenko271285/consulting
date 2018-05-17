<div class="news">

    <?php $title = get_sub_field('title') ? get_sub_field('title') : ''; ?>
    <?php if($title) : ?>
        <h2><?php echo $title; ?></h2>
    <?php endif; ?>

    <div class="container">
        <?php
        $count_news = get_sub_field('count_news') ? get_sub_field('count_news') : 4;
        $args = [
            'post_type' => 'consulting_news',
            'posts_per_page' => $count_news
        ];
        $query = new WP_Query($args);
        if( $query->have_posts() ){
            while( $query->have_posts() ){ $query->the_post();
                ?>
                <div class="row">
                    <div class="col-md-5 col-lg-3">
                        <div class="news_image">
                            <?php if( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri() ?>/no-image.png" alt="Consulting no image">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-9">
                        <div class="news_content clearfix">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_trim_words( get_the_content(), 68 ); ?></p>
                            <a class="news_link" href="<?php echo get_permalink(); ?>">Читать дальше</a>
                        </div>
                    </div>
                </div>
                <hr>
                <?php
            }
            wp_reset_postdata(); // сбрасываем переменную $post
        }
        else echo 'Записей нет.';
        ?>
    </div>
</div>