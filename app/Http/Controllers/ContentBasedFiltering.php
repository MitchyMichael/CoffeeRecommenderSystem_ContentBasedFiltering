<?php
namespace App\Http\Controllers;

use App\Http\Controllers\PreferenceController;
use App\Models\Coffee;

class ContentBasedFiltering extends Controller
{
    public function contentBasedFiltering($preferenceId)
    {
        // Get user preference
        $preferenceController = new PreferenceController();
        $userPreferences = $preferenceController->getPreferencesById($preferenceId);

        // Get all coffees
        $coffees = Coffee::all();
        $menuItems = $coffees->map(function ($coffee) {
            return [
                // 'name' => $coffee->coffeeName,
                // 'description' => $coffee->coffeeDescription,
                // 'photo' => $coffee->coffeePhoto,
                // 'price' => $coffee->coffeePrice,
                // 'best_seller' => $coffee->coffeeIsBestSeller,
                // 'promo' => $coffee->coffeeIsPromo,
                // 'number_chosen' => $coffee->numberChosen,
                'mood' => $coffee->coffeePreferenceMood,
                'activity' => $coffee->coffeePreferenceActivity,
                'temperature' => $coffee->coffeeTemperature,
                'sweetness' => $coffee->coffeeSweetness,
                'milkness' => $coffee->coffeeMilkness,
                'cheapness' => $coffee->coffeeCheapness,
                'drink_type' => $coffee->coffeeDrinkType,
                'acidity_level' => $coffee->coffeeAcidityLevel,
                'strength_level' => $coffee->coffeeStrengthLevel,
            ];
        });

        // dd($menuItems);
        // dd($userPreferences);

        // Calculate cosine similarity for each menu item
        $recommendations = [];
        foreach ($menuItems as $menuItem) {
            // Calculate cosine similarity between user preferences and menu item
            // dd($userPreferences, $menuItem);
            $similarity = $this->calculateCosineSimilarity($userPreferences, $menuItem);
            // Store menu item name and similarity score
            $recommendations[] = $similarity;
        }

        dd($recommendations);

        // Sort recommendations by similarity score (higher scores first)
        arsort($recommendations);

        // Recommend top items to the user
        $topRecommendations = array_slice($recommendations, 0, 3, true); // Get top 3 recommendations

        // Output recommendations
        foreach ($topRecommendations as $itemName => $similarity) {
            // echo "Recommended: $itemName (Similarity: $similarity)\n";
            dd("Recommended: $itemName (Similarity: $similarity)\n");
        }
    }

    // Function to calculate cosine similarity
    public function calculateCosineSimilarity($vectorA, $vectorB)
    {
        $dotProduct = 0;
        $magnitudeA = 0;
        $magnitudeB = 0;

        // dd($vectorA, $vectorB);

        foreach ($vectorA as $key => $value) {
            // dd($vectorA);
            if (isset ($vectorB[$key])) {
                dd($vectorB[$key]);
                $dotProduct += $value * $vectorB[$key];
                // dd($dotProduct);
            }
            $newValue = (double)$value * (double)$value;
            $magnitudeA += (double)$newValue;
            // dd($magnitudeA);
        }
        foreach ($vectorB as $value) {
            $newValue2 = (double)$value * (double)$value;
            $magnitudeB += (double)$newValue2;
            // dd($magnitudeB);
        }
        $magnitudeA = sqrt($magnitudeA);
        $magnitudeB = sqrt($magnitudeB);
        if ($magnitudeA == 0 || $magnitudeB == 0) {
            return 0; // Prevent division by zero
        }

        $thisResult = $dotProduct / ($magnitudeA * $magnitudeB);
        return $thisResult;
    }

}

