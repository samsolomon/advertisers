<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// enqueue typekit fonts
function theme_typekit() {
    wp_enqueue_script( 'theme_typekit', '//use.typekit.net/wzm6axt.js');
}
add_action( 'wp_enqueue_scripts', 'theme_typekit' );
 
function theme_typekit_inline() {
  if ( wp_script_is( 'theme_typekit', 'done' ) ) { ?>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php } }
add_action( 'wp_head', 'theme_typekit_inline' );



?>