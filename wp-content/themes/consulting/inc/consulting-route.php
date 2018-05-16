<?php
function consulting_route($str) {
    switch($str) {
        case 'banner' : get_template_part( 'template-parts/block', 'banner' ); break;
        case 'facts' : get_template_part( 'template-parts/block', 'facts' ); break;
        case 'news' : get_template_part( 'template-parts/block', 'news' ); break;
        case 'video' : get_template_part( 'template-parts/block', 'video' ); break;
        default : echo 'Not template for ' . $str;
    }
}