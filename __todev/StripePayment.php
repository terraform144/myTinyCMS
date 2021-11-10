<?php

require_once('vendor/autoload.php');

class StripePayment
{
    
}


try {
    
    $stripe = new \Stripe\StripeClient('sk_test_51JDDq0FxlEWn2085O8XDcSRulf5qlS6inLYdhM7g6EoWPyb8JlMPjAIol96jTeU48rj0Jk2Oti7pB85Qwe6ZKPam009u7VBRTZ');
    
    /*
     $customer = $stripe->customers->create([
     'description' => 'test customer',
     'email' => 'email@test.test',
     'payment_method' => 'pm_card_visa',
     ]);
     */
    
    /*
     $cu1 = $stripe->charges->retrieve(
     'ch_1JDDu3FxlEWn2085i8NAx3mc',
     ['expand' => ['customer', 'invoice.subscription']]
     );
     */
    
    $charge = $stripe->charges->create([
        'amount' => 2000,
        'currency' => 'eur',
        'source' => 'tok_amex', // obtained with Stripe.js
        'description' => 'My First Test Charge (created for API docs)'
    ], [
        'idempotency_key' => '9a9zrmKOAho2nucS'
    ]);
    
    //var_dump($cu1);
    
} catch(\Stripe\Exception\CardException $e) {
    // Since it's a decline, \Stripe\Exception\CardException will be caught
    echo 'Status is:' . $e->getHttpStatus() . '\n';
    echo 'Type is:' . $e->getError()->type . '\n';
    echo 'Code is:' . $e->getError()->code . '\n';
    // param is '' in this case
    echo 'Param is:' . $e->getError()->param . '\n';
    echo 'Message is:' . $e->getError()->message . '\n';
    
} catch (\Stripe\Exception\RateLimitException $e) {
    // Too many requests made to the API too quickly
    echo $e;
    
} catch (\Stripe\Exception\InvalidRequestException $e) {
    // Invalid parameters were supplied to Stripe's API
    echo $e;
    
} catch (\Stripe\Exception\AuthenticationException $e) {
    // Authentication with Stripe's API failed
    // (maybe you changed API keys recently)
    echo $e;
    
} catch (\Stripe\Exception\ApiConnectionException $e) {
    // Network communication with Stripe failed
    echo $e;
    
} catch (\Stripe\Exception\ApiErrorException $e) {
    // Display a very generic error to the user, and maybe send
    // yourself an email
    echo $e;
    
} catch (Exception $e) {
    echo $e;
    
}
