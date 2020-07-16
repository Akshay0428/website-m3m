<?php //Start building your awesome child theme functions

add_action( 'wp_enqueue_scripts', 'shopkeeper_enqueue_styles', 100 );
function shopkeeper_enqueue_styles() {
    
    // enqueue parent styles
	wp_enqueue_style('shopkeeper-parent-styles', get_template_directory_uri() .'/style.css');

	// enqueue RTL styles
    if( is_rtl() ) {
    	wp_enqueue_style( 'shopkeeper-child-rtl-styles',  get_template_directory_uri() . '/rtl.css', array( 'shopkeeper-styles' ), wp_get_theme()->get('Version') );
    }
}

remove_action( 'woocommerce_after_single_product_summary_upsell_display', 'getbowtied_output_upsells', 15 );
remove_action( 'woocommerce_after_single_product_summary_related_products', 'getbowtied_output_related', 20 );

add_action( 'woocommerce_after_single_product_summary_related_products', 'related_upsell_products', 15 );

function related_upsell_products() {
	global $product;

	if ( isset( $product ) && is_product() ) {
		$upsells = $product->get_upsells();

		if ( sizeof( $upsells ) > 0 ) {
			getbowtied_output_upsells();	
		} else {
			//woocommerce_upsell_display();
			getbowtied_output_related();
		}
	}
}
add_filter( 'woocommerce_product_single_add_to_cart_text' , 'sm_woocommerce_product_add_to_cart_text' );
add_filter( 'woocommerce_product_add_to_cart_text' , 'sm_woocommerce_category_add_to_cart_text' );
/**
 * sm_woocommerce_product_add_to_cart_text
*/
function sm_woocommerce_category_add_to_cart_text() {
    global $product;

    //$product_type = $product->product_type;

    $id = $product->get_id();
    
    if ( has_term( 'cod-no', 'product_cat', $id ) ) {
        return __( 'Personalise It', 'woocommerce' );
    } else {
        return __( 'BOX IT', 'woocommerce' );
    }

}

function sm_woocommerce_product_add_to_cart_text() {
    global $product;

    //$product_type = $product->product_type;

    $id = $product->get_id();
    
    if ( has_term( 'cod-no', 'product_cat', $id ) ) {
        return __( 'BOX IT', 'woocommerce' );
    } else {
        return __( 'BOX IT', 'woocommerce' );
    }

}

add_filter( 'woocommerce_checkout_fields', 'md_custom_woocommerce_checkout_fields' );
/**
 * Change Order Notes Placeholder Text - WooCommerce
 * 
 */
function md_custom_woocommerce_checkout_fields( $fields ) 
{
    $fields['order']['order_comments']['placeholder'] = 'Gift Note';
    $fields['order']['order_comments']['label'] = 'ADD A MESSAGE TO YOUR BOX';
    $fields['billing']['billing_phone']['custom_attributes'] = array( "pattern" => ".{10,10}" );
    return $fields;
}

add_filter("woocommerce_checkout_fields", "reordering_checkout_fields", 15, 1);
function reordering_checkout_fields($fields)
{
    
    ## ---- 1. REORDERING BILLING FIELDS ---- ##
    
    // Set the order of the fields
    $billing_order = array(
        'billing_first_name',
        'billing_last_name',
        'billing_phone',
        'billing_email',
        'billing_postcode',
        'billing_address_1',
        'billing_address_2',
        'billing_city',
        'billing_state',
        'billing_country'
    );
    
    $count    = 0;
    $priority = 10;
    
    // Updating the 'priority' argument
    foreach ($billing_order as $field_name) {
        $count++;
        $fields['billing'][$field_name]['priority'] = $count * $priority;
    }
    
    return $fields;
}

//add_filter( 'woocommerce_available_payment_gateways', 'bbloomer_paypal_disable_manager' );
 
function bbloomer_paypal_disable_manager( $available_gateways ) {
global $woocommerce;
if ( isset( $available_gateways['paytm'] ) && !current_user_can('administrator') ) {
	unset( $available_gateways['paytm'] );
} 
return $available_gateways;
}

// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
     $fields['shipping']['shipping_phone'] = array(
    'label'     => __('Phone', 'woocommerce'),
    'placeholder'   => _x('Phone', 'placeholder', 'woocommerce'),
    'required'  => true,
    'class'     => array('form-row-wide'),
    'clear'     => true
     );

     return $fields;
}

/**
 * Display field value on the order edit page
 */
 
add_action( 'woocommerce_admin_order_data_after_shipping_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );

function my_custom_checkout_field_display_admin_order_meta($order){
    echo '<p><strong>'.__('Phone From Checkout Form').':</strong> ' . get_post_meta( $order->id, '_shipping_phone', true ) . '</p>';
}

function register_order_dispatched_order_status() {
    register_post_status( 'wc-order-dispatched', array(
        'label'                     => 'Order Dispatched',
        'public'                    => true,
        'show_in_admin_status_list' => true,
        'show_in_admin_all_list'    => true,
        'exclude_from_search'       => false,
        'label_count'               => _n_noop( 'Order Dispatched <span class="count">(%s)</span>', 'Order Dispatched <span class="count">(%s)</span>' )
    ) );
}
add_action( 'init', 'register_order_dispatched_order_status' );

function add_order_dispatched_to_order_statuses( $order_statuses ) {
    $new_order_statuses = array();
    foreach ( $order_statuses as $key => $status ) {
        $new_order_statuses[ $key ] = $status;
        if ( 'wc-processing' === $key ) {
            $new_order_statuses['wc-order-dispatched'] = 'Order Dispatched';
        }
    }
    return $new_order_statuses;
}
add_filter( 'wc_order_statuses', 'add_order_dispatched_to_order_statuses' );

add_filter( 'woocommerce_reports_order_statuses', 'include_custom_order_status_to_reports', 20, 1 );
function include_custom_order_status_to_reports( $statuses ){
    // Adding the custom order status to the 3 default woocommerce order statuses
    return array( 'processing', 'order-dispatched', 'completed' );
}
add_filter( 'woocommerce_product_tabs', 'wc_change_product_description_tab_title', 10, 1 );
function wc_change_product_description_tab_title( $tabs ) {
	if ( isset( $tabs['description']['title'] ) )
		$tabs['description']['title'] = 'WHY THIS BOX?';
	return $tabs;
}

// Limit Woocommerce phone field to 10 digits number
add_action('woocommerce_checkout_process', 'my_custom_checkout_field_process');
  
function my_custom_checkout_field_process() {
    global $woocommerce;
  
    // Check if set, if its not set add an error. This one is only requite for companies
    if ( ! (preg_match('/^[0-9]{10}$/D', $_POST['billing_phone'] ))){
        wc_add_notice( "Incorrect Phone Number! Please enter valid 10 digits phone number"  ,'error' );
    }
}


/* Describe what the code snippet does so you can remember later on */
add_action('wp_head', 'custom_gtag_code');
function custom_gtag_code(){
?>
<!-- Global site tag (gtag.js) - Google Ads: 803253664 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-803253664"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-803253664');
</script>
<?php
};

add_action( 'woocommerce_thankyou', 'tbbc_conversion_tracking_thank_you_page' );
 
function tbbc_conversion_tracking_thank_you_page() {
?>
   <!-- Google Code for Conversion Page -->
   <script type="text/javascript">
   	gtag('event', 'conversion', {'send_to': 'AW-803253664/YGydCP6JxawBEKDbgv8C'});
   </script>
<?php
}
/**
 * Move linked variation options.
 */
function iconic_move_linked_variation_options() {
	remove_action( 'woocommerce_single_product_summary', array( 'Iconic_WLV_Product', 'output_linked_variations' ), 25 );
	
	$priority = 40;

	add_action( 'woocommerce_after_add_to_cart_button', array( 'Iconic_WLV_Product', 'output_linked_variations' ), $priority );
}

add_action( 'init', 'iconic_move_linked_variation_options' );