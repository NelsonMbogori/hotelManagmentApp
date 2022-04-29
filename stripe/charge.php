<?php

require_once('vendor/autoload.php');
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/customer.php');
require_once('models/transaction.php');

\Stripe\Stripe::setApiKey('sk_test_51Ko4D8JN6fOVg4DhCXxbJIGgqmlgM8vRb6zunD1RToVP4cWDWwT3y0hcrkg2XAeadS6eQ0GgMQGEmqJfHDqbysX800wb9mTWGZ');


//sanitizing the arrey
$post = filter_var_array($_POST, FILTER_SANITIZE_STRING);


$first_name = $post['first_name'];
$last_name = $post['last_name'];
$email = $post['email'];
$token = $post['stripeToken'];
echo $token;


//creating a customer id in stripe
$customer = \Stripe\Customer::create(array(
    "email" =>$email,
    "source" =>$token
));

//charge customer customer
$charge = \Stripe\charge::create(array(
    "amount" => 5000,
    "currency" =>"usd",
    "description" => "different houses",
    "customer" => $customer->id
));
//the customer data 
$customerData = [

    'id'=>$charge->customer,
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email,
];


//star new instance of class Customer
$customer = new Customer();
$customer->addCustomer($customerData);


//the transaction data 
$transactionData = [

  'id' => $charge->id,
  'customer_id' => $charge->customer,
  'product' => $charge->description,
  'amount' => $charge->amount,
  'currency' => $charge->currency,
  'status' => $charge->status,
];


//star new instance of class Customer
$transaction = new Transaction();
$transaction->addTransaction($transactionData);


//redirect after successful charge
header('location: success.php?tid='.$charge->id.'&product='.$charge->description);



?>