<?php
    $image = get_sub_field('image') ? 'style="background-image:url(' . get_sub_field('image') . ')"' : '';
?>
<div class="banner" <?php echo $image; ?> >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 d-flex align-items-center">
                <?php $list = get_sub_field('list') ? get_sub_field('list') : false; ?>
                <?php if( is_array( $list ) ) : ?>
                    <ul class="banner_list">
                        <?php foreach( $list as $item ) : ?>
                            <?php if( $item['text'] ) : ?>
                                <li class="banner_list-item"><?php echo $item['text']; ?></li>
                            <? endif; ?>
                        <?php endforeach; ?>
                    </ul>
                <? endif; ?>
            </div>
            <div class="col-md-5 p-0 p-sm-3">
                <div class="banner_form">
                    <?php $title_form = get_sub_field('form_title') ? get_sub_field('form_title') : false; ?>
                    <?php if( $title_form ) : ?>
                        <h4><?php echo $title_form; ?></h4>
                    <? endif; ?>
                    <?php echo do_shortcode( '[contact-form-7 id="34" title="Contact form 1"]' )?>
                </div>
            </div>
        </div>
    </div>
</div>
