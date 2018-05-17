<div class="sertificates">
    <?php $title = get_sub_field('title') ? get_sub_field('title') : ''; ?>
    <?php if($title) : ?>
        <h2><?php echo $title; ?></h2>
    <?php endif; ?>

    <?php $gallery = get_sub_field('gallery') ? get_sub_field('gallery') : ''; ?>
    <?php if( $gallery ) : ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div id="sertificatesSlider" class="sertificates-slider owl-carousel">
                        <?php foreach ( $gallery as $item ) : ?>
                            <div class="sertificates-slider_item">
                                <img src="<?php echo $item['url']; ?>" alt="Sertificate">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="sertificates-popup">
            <div class="sertificates-popup_outer"></div>
            <div class="sertificates-popup_windows">
                <div class="sertificates-popup_close">
                    <i class="fal fa-times"></i>
                </div>
                <div id="sertificatesPopupSlider" class="owl-carousel sertificates-popup_slider">
                    <?php foreach ( $gallery as $item ) : ?>
                        <div class="sertificates-popup_item">
                            <img src="<?php echo $item['url']; ?>" alt="Sertificate">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>