<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    // Function to create a new customer
    function createCustomer($preferenceId)
    {
        // Create new customer
        $customer = new Customer();
        $customer->preference_id = $preferenceId;
        $customer->save();
    }
}

