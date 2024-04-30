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

        // Get sort ID
        $sortId = $request->input('sort_id');

        // Make new choise to save to database
        $choise = new Choise();
        $choise->customer_id = $customerId;
        $choise->coffee_id = $coffeeId;
        $choise->sortId = $sortId;

        $choise->save();

        $choise_id = $choise->id;

        return view('thanksView', compact('choise_id', 'coffeeId'));
    }
}
