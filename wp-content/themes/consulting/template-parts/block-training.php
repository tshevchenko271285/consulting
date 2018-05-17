<div class="training">
    <?php $title = get_sub_field('title') ? get_sub_field('title') : ''; ?>
    <?php if($title) : ?>
        <h2><?php echo $title; ?></h2>
    <?php endif; ?>
    <div class="training_outer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="d-none d-md-block col-md-6 col-lg-5">
                    <?php $image = get_sub_field('image') ? get_sub_field('image') : ''; ?>
                    <?php if( $image ) : ?>
                        <div class="training_image">
                            <img src="<?php echo $image; ?>" alt="Consuling Training">
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="training_content">
                        <?php $sub_title = get_sub_field('sub_title') ? get_sub_field('sub_title') : ''; ?>
                        <?php if($sub_title) : ?>
                            <h3><?php echo $sub_title; ?></h3>
                        <?php endif; ?>
                        <?php $text = get_sub_field('text') ? get_sub_field('text') : ''; ?>
                        <?php if($text) echo $text; ?>
                    </div>
                    <div class="training_form">
                        <?php echo do_shortcode('[contact-form-7 id="92" title="Training"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>