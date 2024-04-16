<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function saveLike(Request $request){
        $customerId = $request->input('customer_id');
        return redirect()->route('root');
    }
}
