<div class="facts">
    <?php $title = get_sub_field('title') ? get_sub_field('title') : ''; ?>
    <?php if( $title ) : ?>
        <h2><?php echo $title; ?></h2>
    <?php endif; ?>
    <?php $list = get_sub_field('list') ? get_sub_field('list') : ''; ?>
    <div class="container">
        <div class="row">
            <?php if( $list ) : ?>
                <?php foreach ( $list as $fact ) : ?>
                <div class="col-md-6">
                    <div class="facts_item">
                        <div class="facts_image">
                            <?php if( $fact['image'] ) : ?>
                                <?php echo wp_get_attachment_image($fact['image'], [205, 161]);?>
                            <?php endif; ?>
                        </div>
                        <div class="facts_content">
                            <?php if( $fact['title'] ) : ?>
                                <h3><?php echo $fact['title']; ?></h3>
                            <?php endif; ?>
                            <?php if( $fact['text'] ) : ?>
                                <p><?php echo $fact['text']; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>