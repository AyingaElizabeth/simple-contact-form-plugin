<?php
add_shortcode( 'contact', 'show_contact_form' );
add_action( 'rest_api_init', 'create_rest_endpoint' );

function show_contact_form()
{
    include MY_PLUGIN_PATH .'/includes/templates/contact-form.php';
}

function create_rest_endpoint(){

    register_rest_route( 'v1/contact-form', 'submit', array(
        'method'=>'POST',
        'callback'=>'handle_enquiry'
    ) );

}
function handle_enquiry($data){
    $params= $data->get_params();

    if(wp_verify_nonce( $params['_wpnounce'], 'wp_rest' )){
        return new WP_REST_Response('message not sent',220);
    }
   
   unset($params['_wpnonce']);
   unset($params['_wp_http_referer']);

   //sending email message
   $headers=[];

   $sender_email=get_bloginfo( 'admin_email');
   $sender_name=get_bloginfo( 'name' );

   $headers[]="From:{$sender_name} <{$sender_email}>";
   $headers[]="Reply-to:{$params['name']}<{$param['email']}>";

   $message='';
   $message .="message has been sent by{$params['name']}";
}