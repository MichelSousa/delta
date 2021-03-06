<?php ob_start(); 
if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

// additional image sizes
// delete the next line if you do not need additional image sizes
add_image_size( 'projeto',296 ,227); 
add_image_size( 'equipe',134 ,134); 
add_image_size( 'cliente',150 ,50); 

if ( function_exists( 'register_nav_menu' ) ) {
register_nav_menu( 'primary', 'Este é meu primeiro menu' );

}


function excerpt($limit) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt)>=$limit) {
array_pop($excerpt);
$excerpt = implode(" ",$excerpt).'...';
} else {
$excerpt = implode(" ",$excerpt);
}
$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
return $excerpt;
}


}



add_action( 'wp_head', 'sushiai_css_customizer' );

add_action( 'customize_register', 'gamesquare_customize_register' );



/* Desenvolvido por Michel Damasceno */

function gamesquare_customize_register( $wp_customize )
{
    

//===================== Upload do logotipo

$wp_customize->add_section( 'casa_image' , array(
     'title'     => __( 'Logo', 'sushiai' ),
      'description'   => 'Modifique o logo',
) );

$wp_customize->add_setting( 'casa_logo_image' , array(
    'default'     => 'Adicione o logotipo',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_image', array(
	'label'        => __( 'Logo', 'sushiai' ),
	'section'    => 'casa_image',
	'settings'   => 'casa_logo_image',
) ) );


//===================== Upload do logo cardápio

$wp_customize->add_section( 'sushiai_image_cardapio' , array(
     'title'     => __( 'Image cardápio', 'sushiai' ),
      'description'   => 'Modifique o logo da seção cardápio',
) );

$wp_customize->add_setting( 'logo_image_cardapio' , array(
    'default'     => 'http://preview.vicomercial.com.br/sushiai/wp-content/themes/sushiai/img/logo.png',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_image_cardapio', array(
	'label'        => __( 'Logo Cardapio', 'sushiai' ),
	'section'    => 'sushiai_image_cardapio',
	'settings'   => 'logo_image_cardapio',
) ) );


//===================== Url like facebook box

$wp_customize->add_section( 'sushiai_box_facebook' , array(
     'title'     => __( 'Url like facebook box', 'sushiai' ),
      'description'   => 'URL  like box facebook',
) );

$wp_customize->add_setting( 'ur_like_facebook' , array(
    'default'     => 'https://www.facebook.com/FacebookDevelopers',
) );

$wp_customize->add_control('url_like', array(
	'label'        => __( 'url', 'sushiai' ),
	'section'    => 'sushiai_box_facebook',
	'settings'   => 'ur_like_facebook',
)  );

//===================== Número de telefone

$wp_customize->add_section( 'casa_fone' , array(
     'title'     => __( 'Número de telefone', 'sushiai' ),
      'description'   => 'Digite o número de telefone',
) );

$wp_customize->add_setting( 'text_fone' , array(
    'default'     => '(62)  1234 5678 90',
) );

$wp_customize->add_control('casa_fone_text', array(
  'label'        => __( 'url', 'sushiai' ),
  'section'    => 'sushiai_fone',
  'settings'   => 'text_fone',
)  );


//===================== Endereço

$wp_customize->add_section( 'sushiai_endereco' , array(
     'title'     => __( 'Endereço', 'sushiai' ),
      'description'   => 'Digite o seu endereço',
) );

$wp_customize->add_setting( 'text_endereco' , array(
    'default'     => 'Rua Lucia Madalena Strapassoni, 154 | Sala 5, Quatro Barras',
) );

$wp_customize->add_control('sushiai_endereco_text', array(
  'label'        => __( 'url', 'sushiai' ),
  'section'    => 'sushiai_endereco',
  'settings'   => 'text_endereco',
)  );

}


function sushiai_css_customizer()
{

	?>

 <style type="text/css">
     body{ background-color:#<?php echo get_theme_mod('background_color') ; ?>  }
 </style>

	<?php
}




// Registrar áreas de widgets
function theme_widgets_init() {
 // Área 1
 register_sidebar( array (
 'name' => 'Primary Widget Area',
 'id' => 'primary_widget_area',

  ) );
 

 register_sidebar( array (
 'name' => 'Secondary Widget Area',
 'id' => 'secondary_widget_area',
 
  ) );


} // end theme_widgets_init
 
add_action( 'init', 'theme_widgets_init' );



if ( isset( $_GET['activated'] ) ) {
 update_option( 'sidebars_widgets', $preset_widgets );
}
// update_option( 'sidebars_widgets', NULL );

// Verificar widgets nas áreas de widgets
function is_sidebar_active( $index ){
  global $wp_registered_sidebars;
 
  $widgetcolums = wp_get_sidebars_widgets();
 
  if ($widgetcolums[$index]) return true;
 
 return false;
} 




?>  


	 
	 
	