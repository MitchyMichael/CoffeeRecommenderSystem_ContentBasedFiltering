<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Cafe;
use App\Models\Coffee;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


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
            $cafeId = $cafe->id;
            Session::put('cafeId', $cafeId);
            return redirect()->route('adminDashboard');
        } else {
            dd("Wrong");
        }
    }

    public function submitNewCoffee(Request $request)
    {
        $newCoffee = new Coffee();
        $cafeId = $request->input('cafeIdField');

        $newCoffee->cafeId = $cafeId;
        $newCoffee->coffeeName = $request->input('coffeeName');
        $newCoffee->coffeeDescription = $request->input('coffeeDescription');
        $newCoffee->coffeePrice = $request->input('coffeePrice');

        $isBestSeller = $request->input('coffeeIsBestSeller');

        if ($isBestSeller == 'true') {
            $newCoffee->coffeeIsBestSeller = true;
        } else {
            $newCoffee->coffeeIsBestSeller = false;
        }

        $newCoffee->coffeePreferenceMood = $request->input('coffeePreferenceMood');
        $newCoffee->coffeePreferenceActivity = $request->input('coffeePreferenceActivity');
        $newCoffee->coffeeTemperature = $request->input('coffeeTemperature');
        $newCoffee->coffeeSweetness = $request->input('coffeeSweetness');
        $newCoffee->coffeeMilkness = $request->input('coffeeMilkness');
        $newCoffee->coffeeCheapness = $request->input('coffeeCheapness');
        $newCoffee->coffeeAcidityLevel = $request->input('coffeeAcidityLevel');
        $newCoffee->coffeeStrengthLevel = $request->input('coffeeStrengthLevel');

        // Save image and path
        if ($request->hasFile('coffeePhoto')) {
            $extension = $request->file('coffeePhoto')->getClientOriginalExtension();
            $newName = $request->model . "-" . now()->timestamp . "." . $extension;
            $thisImage = $request->file('coffeePhoto')->storeAs("coffee_images", $newName);
            $newCoffee->coffeePhoto = $thisImage;
        }

        $newCoffee->save();
        return redirect()->route('adminDashboard');
    }
}
