<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preference;
use App\Models\Customer;

class PreferenceController extends Controller
{
    public function store(Request $request)
    {
        // Make new preference from form
        $preference = new Preference();
        $preference->preferenceMood = $request->input('preferenceMood');
        $preference->preferenceActivity = $request->input('preferenceActivity');
        $preference->preferenceCoffeeTemperature = $request->input('preferenceCoffeeTemperature');
        $preference->preferenceCoffeeSweetness = $request->input('preferenceCoffeeSweetness');
        $preference->preferenceCoffeeMilkness = $request->input('preferenceCoffeeMilkness');
        $preference->preferenceCoffeeMilkType = $request->input('preferenceCoffeeMilkType');
        $preference->preferenceCoffeePrice = $request->input('preferenceCoffeePrice');
        $preference->preferenceCoffeeDrinkType = $request->input('preferenceCoffeeDrinkType');
        $preference->preferenceCoffeeAcidityLevel = $request->input('preferenceCoffeeAcidityLevel');
        $preference->preferenceCoffeeStrengthLevel = $request->input('preferenceCoffeeStrengthLevel');
        $preference->save();

        // Get the current preference id
        $preferenceId = $preference->id;

        // Make new customer
        $customer = new Customer();
        $customer->preference_id = $preferenceId;
        $customer->save();

        // return "Preferences saved successfully!";

        $script = "<script>window.location.href='/recommendation';</script>";
        return response($script);
    }
}
