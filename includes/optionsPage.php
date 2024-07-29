<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'after_setup_theme', 'load_carbon_fields');
add_action( 'carbon_fields_register_fields', 'create_options_page' );

function load_carbon_fields(){
    \Carbon_Fields\Carbon_Fields::boot();
}

function create_options_page()
{
    Container::make( 'theme_options', __( 'Contact Form' ) )
    ->set_icon('dashicons-media-document')
    ->add_fields( array(

        Field::make( 'checkbox', 'contact_form_active', __( 'Active' ) )
        ->set_option_value( 'yes' ),

        Field::make( 'text', 'contact_form_recipients', __( 'Recipients Email' ) )
        ->set_attribute( 'placeholder', 'eg. myemail@gmail.com' )
        ->set_help_text('the email form is submitted to '),

        Field::make( 'textarea', 'contact_form_message', __( 'confirmation' ) )
        ->set_attribute( 'placeholder', 'Enter confirmation' )
        ->set_help_text( 'type message you want the submitter to receive' ),


        
    ) );
}
