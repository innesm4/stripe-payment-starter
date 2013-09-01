<?php
  require_once('./stripe/lib/Stripe.php');
  $stripe = array(
    'secret_key'      => 'sk_test_d7NrN9ktH4RAhSxlu0QmDqRA',
    'publishable_key' => 'pk_test_5QeBXg567XuvamZchcQWWVv2'
    );
  Stripe::setApiKey($stripe['secret_key']);
?>