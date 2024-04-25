<?php

namespace App\Http\Controllers;

use App\Models\Choise;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function saveLike(Request $request){
        $customerId = $request->input('customer_id');

        $question1 = $request->input('question1');
        $question2 = $request->input('question2');
        $question3 = $request->input('question3');
        $question4 = $request->input('question4');

        $choise = Choise::findOrFail($customerId);
        $choise->question1 = $question1;
        $choise->question2 = $question2;
        $choise->question3 = $question3;
        $choise->question4 = $question4;

        $choise->save();

        return view('endView', compact('customerId'));
    }
}
