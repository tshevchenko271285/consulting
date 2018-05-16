<?php
function consulting_route($str) {
    switch($str) {
        case 'banner' : get_template_part( 'template-parts/block', 'banner' ); break;
        case 'facts' : get_template_part( 'template-parts/block', 'facts' ); break;
        default : echo 'Not template for ' . $str;
    }
}