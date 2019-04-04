<?php

function carousel_image_css() {
	$image1 = get_theme_mod( 'carousel-image-1' ); 
	$image2 = get_theme_mod( 'carousel-image-2' ); 
	$image3 = get_theme_mod( 'carousel-image-3' ); 
	
	?>
            <style>
                #carousel1 {
                    height: 100vh;
                    width: 100%;
                    background-image: url(<?= $image1 ?>);
                    background-size: cover;
                    background-position: center;
                }
                #carousel2{
                    height: 100vh;
                    width: 100%;
                    background-image: url(<?= $image2 ?>);
                    background-size: cover;
                    background-position: center;
                }
                #carousel3{
                    background-color: red;
                    height: 100vh;
                    width: 100%;
                    background-image: url(<?= $image3 ?>);
                    background-size: cover;
                    background-position: center;
                }

            </style>
	<?php
}
add_action( 'wp_head', 'carousel_image_css' );


