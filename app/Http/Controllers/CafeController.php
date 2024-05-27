<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;

class CafeController extends Controller
{
    public function addCafe(Request $request){
        $cafeName = $request->input('cafeName');
        $cafeEmail = $request->input('cafeEmail');
        $cafePassword = $request->input('cafePassword');

        $cafe = new Cafe();
        $cafe->cafeName = $cafeName;
        $cafe->cafeEmail = $cafeEmail;
        $cafe->cafePassword = $cafePassword;

        $cafe->save();
        return redirect()->route('root');
    }
}
