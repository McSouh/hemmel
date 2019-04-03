<?php
class MgCustomizer
{
  /**
   * Fonction qui ajoute la possibilité de customiser la partie personnalisation du thème
   * //https://developer.wordpress.org/themes/customize-api/customizer-objects/
   *
   * @param [type] $wp_customize
   * @return void
   */
  public static function add_customize_color($wp_customize)
  {
  // Ajout d'une section.
  // Attention une section ne s'affichera que si elle contient des controls.
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
    $wp_customize->add_section('section-color', [
      'title' => __('Personalisation des couleurs'),
      'description' => __('Personalisation des couleurs')
    ]);
  
  // Ajout d'un setting qui contiendra des informations dans la base de donnée sous la clé correspondant à son id (premier paramètre)
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
    $wp_customize->add_setting('color-primary', [
      'type' => 'theme_mod',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
    ]);
  // Ajout d'un control (un label avec input et autre information). Le control doit être attaché à une section ainsi qu'à un setting.
  // Attention le setting doit déjà être créer afin que le control puisse s'ajouter.
  // Attention un control ne s'affiche que s'il est lié à un setting.
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
  $wp_customize->add_control( 
	new WP_Customize_Color_Control( 
	$wp_customize, 
	'color-primary-control', 
	array(
		'label'      => __( 'Couleur principale', 'mytheme' ),
		'section'    => 'section-color',
    'settings'   => 'color-primary',
    'transport'   => 'refresh'
	) ) 
);


  }
}
add_action('customize_register', [MgCustomizer::class, 'add_customize_color']);