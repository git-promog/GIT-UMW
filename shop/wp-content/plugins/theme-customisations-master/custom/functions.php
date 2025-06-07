<?php
/**
 * Functions.php
 *
 * @package  Theme_Customisations
 * @author   WooThemes
 * @since    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * functions.php
 * Add PHP snippets here
 */





   /**  Declaring WooCommerce support in themes */
 
 function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );







   /**  Enqueue CSS and JS Bootstrap MDBootstrap  */


function my_scripts() {
    wp_enqueue_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css');
	wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');
	wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
	wp_enqueue_style('mdb_min_css', 'https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css');
    wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );











   /**  CUSTOM TABS  */


/**
 * Add a custom product data tab
 */
/*
add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );
function woo_new_product_tab( $tabs ) {
	
	// Adds the new tab
	
	$tabs['test_tab'] = array(
		'title' 	=> __( 'New Product Tab', 'woocommerce' ),
		'priority' 	=> 50,
		'callback' 	=> 'woo_new_product_tab_content'
	);

	return $tabs;

}
function woo_new_product_tab_content() {

	// The new tab content

	echo '<h2>New Product Tab</h2>';
	echo '<p>Here\'s your new product tab.</p>';
	
}
*/




/**
 * Rename product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

	$tabs['description']['title'] = __( 'Ficha Técnica' );		// Rename the description tab

	return $tabs;

}






   /**  WOO ANIMATION  */

/*
function insert_woo_animation() {
    ?>
          
<script>new WOW().init();</script>  	
            
    <?php
}
add_action('wp_footer', 'insert_woo_animation');

*/





   /**  GOOGLE ANALYTICS  */


function insert_analytycs() {
    ?>
          
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TJGZYHM76W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TJGZYHM76W');
</script>  	
            
    <?php
}
add_action('wp_head', 'insert_analytycs');







add_action( 'wp_footer', 'mycustom_wp_footer' );
  
function mycustom_wp_footer() {
?>
    <script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    setTimeout( () => {
        location = 'https://ummotosmexico.mx/umw/form_exit.html';
    }, 1000 ); // Wait for 1 seconds to redirect.
}, false );
</script>
<?php
}




   /**  FACEBOOK PIXEL  */


function insert_pixelfb() {
    ?>
          
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '599110061139237');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=599110061139237&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->  	
            
    <?php
}
add_action('wp_head', 'insert_pixelfb');





    
     