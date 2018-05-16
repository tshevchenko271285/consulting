<?php
    $image = get_sub_field('image') ? 'style="background-image:url(' . get_sub_field('image') . ')"' : '';
?>
<div class="video" <?php echo $image; ?> >
    <?php $title = get_sub_field('title') ? get_sub_field('title') : ''; ?>
    <?php if($title) : ?>
        <h2><?php echo $title; ?></h2>
    <?php endif; ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="video_item">
                    <?php
                        $first_video = get_sub_field('first_video') ? get_sub_field('first_video') : '';
                        if( $first_video ) {
                            echo do_shortcode('[embedyt]' . $first_video . '[/embedyt]');
                        }
                    ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="video_item">
                    <?php
                    $two_video = get_sub_field('two_video') ? get_sub_field('two_video') : '';
                    if( $first_video ) {
                        echo do_shortcode('[embedyt]' . $two_video . '[/embedyt]');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
