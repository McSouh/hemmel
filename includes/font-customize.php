<?php

function font_customize() {
    $font = get_theme_mod( 'font' );
    $fileinfo = pathinfo($font);
    $ext = $fileinfo['extension'];

	if($ext == 'otf' || $ext == 'ttf'){
	
	?>
            <style>
                @font-face {
                    font-family: fontwp;
                    src: url(<?= $font ?>);
                }

                .font-wp {
                    font-family: fontwp;
                }

            </style>
    <?php
    }
}
add_action( 'wp_head', 'font_customize' );


