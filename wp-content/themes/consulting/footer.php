    <footer class="footer">
        <?php
        wp_nav_menu( array(
            'theme_location'  => 'footer-menu',
            'menu'            => '',
            'menu_id'         => '',
            'container'       => 'nav',
            'container_class' => 'footer_menu',
            'container_id'    => '',
            'menu_class'      => 'menu',
            'echo'            => true,
        ) );
        ?>

        <?php $phones = get_field('phones', 'options') ? get_field('phones', 'options') : false; ?>
        <?php if( $phones ) : ?>
            <?php foreach( $phones as $phone ) : ?>
                <?php if( strlen( $phone['text'] ) ) :?>
                    <div class="footer_contact">
                        <i class="fas fa-phone fa-rotate-90"></i>
                        <span><?php echo $phone['text']; ?></span>
                    </div>
                <?php endif?>
            <?php endforeach;?>
        <? endif; ?>

        <?php $emails = get_field('emails', 'options') ? get_field('emails', 'options') : false; ?>
        <?php if( $emails ) : ?>
            <?php foreach( $emails as $email ) : ?>
                <?php if( strlen( $email['text'] ) ) :?>
                    <div class="footer_contact">
                        <i class="fal fa-envelope"></i>
                        <span><?php echo $email['text']; ?></span>
                    </div>
                <?php endif?>
            <?php endforeach;?>
        <? endif; ?>
    </footer>
<?php wp_footer(); ?>

</body>
</html>
