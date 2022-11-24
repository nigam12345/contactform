<?php

// Cyblance\contactform\src\ContactFormServiceProvider.php
namespace Cyblance\contactform;
use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider{

    public function boot(){

    	// MyVendor\contactform\src\ContactFormServiceProvider.php
    	$this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register(){

    }
}
?>