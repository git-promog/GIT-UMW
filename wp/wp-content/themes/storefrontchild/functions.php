<?php
 

   /**  Declaring WooCommerce support in themes */
 
 function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );



















/************************  Remove SideBar  ************************/

function mb_remove_sidebar() {
    return false;
}

add_filter( 'is_active_sidebar', 'mb_remove_sidebar', 10, 2 ); 









/************************  Incluir Bootstrap CSS / JS / Popper /   ************************/


// Incluir Font Awesome
function font_awesome() {
	wp_enqueue_style( 'font_awesome', 
  					'https://use.fontawesome.com/releases/v5.11.2/css/all.css', 
  					array(), 
  					'5.11.2'
  					); 
}
add_action( 'wp_enqueue_scripts', 'font_awesome');



// Incluir Bootstrap CSS
function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', 
  					'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', 
  					array(), 
  					'5.0.2'
  					); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');


// Incluir MDBootstrap CSS
function mdbootstrap_css() {
	wp_enqueue_style( 'mdbootstrap_css', 
  					'https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.css', 
  					array(), 
  					'3.0.0'
  					); 
}
add_action( 'wp_enqueue_scripts', 'mdbootstrap_css');


// Incluir Bootstrap JS y dependencia popper
function bootstrap_js() { 
	wp_enqueue_script( 'bootstrap_js', 
  					'https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js', 
  					array(), 
  					'3.6.0', 
  					true); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_js');







/************************  FOOTER Remover Creditos / Widgets   ************************/

add_action( 'init', 'custom_remove_footer_credit', 10 );

function custom_remove_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_footer_widgets', 10 );
    remove_action( 'storefront_footer', 'storefront_credit', 20 );  
} 









/************************  HEADER Re-Acomodar Busqueda/Cart   ************************/


add_action( 'init', 'remove_sf_head_search' );
function remove_sf_head_search() {
remove_action( 'storefront_header', 'storefront_product_search', 	40 );
add_action( 'storefront_header', 'storefront_product_search', 	15 );
}

add_action( 'init', 'remove_sf_head_cart' );
function remove_sf_head_cart() {
remove_action( 'storefront_header', 'storefront_header_cart', 	60 );
add_action( 'storefront_header', 'storefront_header_cart', 	18 );
}










// Change Woocommerce css breaktpoint from max width: 768px to 767px  
add_filter('woocommerce_style_smallscreen_breakpoint','woo_custom_breakpoint');

function woo_custom_breakpoint($px) {
  $px = '767px';
  return $px;
}



 













/************************************************************************************************************************************************************************  JAVA SCRIPT   ************************************************************************************************************************************************************************/



/************************  Sticky   ************************/

add_action( 'wp_head', function () { ?>
<script>

	
	
// sticky site-navigation
(function($){
	$(document).ready(function () {
		$(window).scroll(function() {
			  if ($(this).scrollTop() > 100){  
				jQuery('#masthead').addClass('sticky');
			  }
			  else{
				jQuery('#masthead').removeClass("sticky");
			  }
        		});
	});	
})(jQuery);

	
	
	
</script>
<?php } );