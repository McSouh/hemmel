<?php

function admin_area_style()
{
    ?> 
        <style>
            .attachment-thumb.type-icon.icon {
                display: none !important ;
            }
        </style>
    <?php
}
add_action('customize_controls_print_styles', 'admin_area_style');