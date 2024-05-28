<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preference;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ContentBasedFiltering;
use Illuminate\Support\Facades\Session;

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
        $preference->preferenceCoffeePrice = $request->input('preferenceCoffeePrice');
        $preference->preferenceCoffeeAcidityLevel = $request->input('preferenceCoffeeAcidityLevel');
        $preference->preferenceCoffeeStrengthLevel = $request->input('preferenceCoffeeStrengthLevel');
        $preference->save();

        // Get the current preference id
        $preferenceId = $preference->id;

        // Make new customer
        $customerController = new CustomerController();
        $thisCustomerID = $customerController->createCustomer($preferenceId);

        // Content-based filtering
        $contentBasedFiltering = new ContentBasedFiltering();

        $hasCafeId = Session::has('cafeId');
        if ($hasCafeId) {
            $cafeId = Session::get('cafeId');
        }

        $result = $contentBasedFiltering->contentBasedFiltering($preferenceId);
        $sortRec = $result[0]; // All sorted recommendations
        $topRec = $result[1]; // Top 3 recommendations

        // Go to next page
        return view('recommendationView', compact('topRec', 'sortRec', 'thisCustomerID'));
    }

    function getPreferencesById($preferenceId)
    {
        $userPreferences = Preference::find($preferenceId);

        if ($userPreferences) {
            // Convert user preferences object to an associative array
            $userPreferencesArray = $userPreferences->toArray();

            // Remove 'id' field
            unset($userPreferencesArray['id']);
            unset($userPreferencesArray['created_at']);
            unset($userPreferencesArray['updated_at']);
            return $userPreferencesArray;

        } else {
            return null;
        }
    }
}
