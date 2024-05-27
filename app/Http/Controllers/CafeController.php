<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Cafe;

class CafeController extends Controller
{
    public function addCafe(Request $request)
    {
        $cafeName = $request->input('cafeName');
        $cafeEmail = $request->input('cafeEmail');
        $cafePassword = $request->input('cafePassword');

        // Hash the password before saving
        $hashedPassword = Hash::make($cafePassword);

        $cafe = new Cafe();
        $cafe->cafeName = $cafeName;
        $cafe->cafeEmail = $cafeEmail;
        $cafe->cafePassword = $hashedPassword;

        $cafe->save();
        return redirect()->route('root');
    }

    public function loginForAdmin(Request $request)
    {
        $loginEmail = $request->input('email');
        $loginPassword = $request->input('password');

        // Find the cafe with the given email
        $cafe = Cafe::where('cafeEmail', $loginEmail)->first();

        if ($cafe && Hash::check($loginPassword, $cafe->cafePassword)) {
            dd("You are in");
        } else {
            dd("Wrong");
        }


    }
}
