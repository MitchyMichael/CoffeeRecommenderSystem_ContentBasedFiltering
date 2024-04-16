<?php

namespace App\Http\Controllers;

use App\Models\Choise;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function saveLike(Request $request){
        $like = $request->input('like_id');
        $customerId = $request->input('customer_id');

        $choise = Choise::findOrFail($customerId);
        $choise->isLike = $like;

        $choise->save();
        
        return redirect()->route('root');
    }
}
