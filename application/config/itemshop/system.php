<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


/**
 * Valūtu nosaukumi konkrētajās valstīs
 */
$config['currency'] = array(
    'lv' => 'EUR',
    'lt' => 'EUR',
    'ee' => 'EUR',
    // Temp fix.
    'eu' => 'EUR',
);


/**
 * @todo replace this array with API function
 */
$config['countries'] = array (
    'lv' => 'Latvia'
);


/**
 * API server address
 */
$config['api_url'] = 'http://dev.zb.baltgro.lv/';


/**
 * Maximal shopping cart size
 * Change of this value isn't recommended
 */
$config['cart_size'] = 10;


/**
 * Payment options array
 */
$config['payment_options'] = array(
    
    'sms' => array(
        
        'limits' => array(
            'min' => '15',
            'max' => '1295',
        ),
        'currency' => 'EUR',
        'name' => 'SMS',
    ),
    
    'paypal' => array(
        
        'limits' => array(
            'min' => '1.00',
            'max' => '300.00',
        ),
        'currency' => 'EUR',
        'name' => 'Paypal',
    ),
    
);


/**
 * Checkout fields
 */
$config['fields_checkout'] = array(
    
    'mc_username' => array(
        'label' => 'Atrodi sevi',
        'type' => 'dropdown',
        'fill' => 'mandatory',
        'php_validation' => 'xss_clean|callback__minecraft_check_online',
        'options' => 'class="chosen choose_player"',
        'value' => set_select('mc_username'),
    ),
);


/**
 * Fields for payment type: SMS
 */
$config['fields_sms'] = array(
    
    'countries' => array(
        'label' => 'Valsts',
        'type' => 'dropdown',
        'fill' => 'mandatory',
        'php_validation' => 'xss_clean|alpha',
        'options' => 'class="chosen"',
        'value' => set_value('countries'),
    ),

    'prices_sms' => array(
        'label' => 'Cena',
        'type' => 'text',
        'fill' => 'mandatory',
        'value' => '',
    ),
    
    'smscode' => array(
        'label' => 'Nopirktais SMS kods',
        'type' => 'input',
        'fill' => 'mandatory',
        'ajax_validation' => 'required digits code',
        'php_validation' => 'trim|required|exact_length[9]|numeric|xss_clean',
        'options' => array(
            'name' => 'smscode',
            'value' => '',
            'maxlength' => '9',
            'minlength' => '9',
        ),
    ),  
);

/**
 * Fields for payment type: Paypal
 */
$config['fields_paypal'] = array(
    
    'prices_paypal' => array(
        'label' => 'Cena',
        'type' => 'text',
        'fill' => 'mandatory',
        'value' => '',
    ),
    
    'paypalcode' => array(
        'label' => 'Nopirktais Paypal kods',
        'type' => 'input',
        'fill' => 'mandatory',
        'ajax_validation' => 'required digits code',
        'php_validation' => 'trim|required|xss_clean|numeric|exact_length[9]',
        'options' => array(
            'name' => 'paypalcode',
            'value' => '',
            'maxlength' => '9',
            'minlength' => '9',
        ),
    ),  
);