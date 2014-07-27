<?php ob_start(); 
if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

// additional image sizes
// delete the next line if you do not need additional image sizes
add_image_size( 'blog', null,null); //300 pixels wide (a
add_image_size( 'cardapio', 150, 150 ); //300 pixels wide (a
add_image_size( 'slide', 1005, 495 ); //300 pixels wide (a
add_image_size( 'social', 40, 40 ); //300 pixels wide (a
add_image_size( 'social-mini', 60, 60 ); //300 pixels wide (a
add_image_size( 'social-medium', 160, 45 ); //300 pixels wide (a


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

wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery.js');
wp_enqueue_script('jquery');

//====================== bootstrap
 wp_register_script('bootstrap', get_bloginfo('template_url').'/js/bootstrap.min.js');
 wp_enqueue_script('bootstrap');


 //====================== bootstrap-tab
 wp_register_script('bootstrap-tab', get_bloginfo('template_url').'/js/bootstrap-tab.js');
 wp_enqueue_script('bootstrap-tab');

//====================== bootstrap-collapse
 wp_register_script('bootstrap-collapse', get_bloginfo('template_url').'/js/bootstrap-collapse.js');
 wp_enqueue_script('bootstrap-collapse');

//====================== bootstrap-dropdown
 wp_register_script('bootstrap-dropdown', get_bloginfo('template_url').'/js/bootstrap-dropdown.js');
 wp_enqueue_script('bootstrap-dropdown');

//====================== bootstrap-dropdown
 wp_register_script('bootstrap-dropdown', get_bloginfo('template_url').'/js/bootstrap-dropdown.js');
 wp_enqueue_script('bootstrap-dropdown');

//====================== easing
 wp_register_script('easing', get_bloginfo('template_url').'/js/jquery.easing.min.js');
 wp_enqueue_script('easing');

 //====================== tab
 wp_register_script('tab', get_bloginfo('template_url').'/js/tab.js');
 wp_enqueue_script('tab');


//====================== slide
 wp_register_script('slide', get_bloginfo('template_url').'/js/slide.js');
 wp_enqueue_script('slide');


//====================== ancora-deslizante
 wp_register_script('ancora-deslizante', get_bloginfo('template_url').'/js/ancora-deslizante.js');
 wp_enqueue_script('ancora-deslizante');


//====================== ancora-deslizante
 wp_register_script('blog-carrossel', get_bloginfo('template_url').'/js/blog-carrossel.js');
 wp_enqueue_script('blog-carrossel');


/* Desenvolvido por Michel Damasceno */

function gamesquare_customize_register( $wp_customize )
{
    

//===================== Upload do logotipo

$wp_customize->add_section( 'sushiai_image' , array(
     'title'     => __( 'Logo', 'sushiai' ),
      'description'   => 'Modifique o logo',
) );

$wp_customize->add_setting( 'logo_image' , array(
    'default'     => 'http://preview.vicomercial.com.br/sushiai/wp-content/themes/sushiai/img/logo.png',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_image', array(
	'label'        => __( 'Logo', 'sushiai' ),
	'section'    => 'sushiai_image',
	'settings'   => 'logo_image',
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

$wp_customize->add_section( 'sushiai_fone' , array(
     'title'     => __( 'Número de telefone', 'sushiai' ),
      'description'   => 'Digite o número de telefone',
) );

$wp_customize->add_setting( 'text_fone' , array(
    'default'     => '(41) 3672-4116',
) );

$wp_customize->add_control('sushiai_fone_text', array(
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


	 
	 
	