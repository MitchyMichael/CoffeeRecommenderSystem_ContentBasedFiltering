<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Choise;

class ChoiseController extends Controller
{
    public function saveCoffee(Request $request)
    {
        // Get the coffee ID from the request
        $coffeeId = $request->input('coffee_id');

        // Get current customer ID
        $customerId = $request->input('customer_id');

        // Make new choise to save to database
        $choise = new Choise();
        $choise->customer_id = $customerId;
        $choise->coffee_id = $coffeeId;
        // $choice->isLike = $isLike ?? null; This is to be done
        
        $choise->save();

        return redirect()->route('root')->with('success', 'Coffee saved successfully.');
    }
}
