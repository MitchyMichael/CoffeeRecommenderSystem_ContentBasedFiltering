<?php
namespace App\Http\Controllers;

use App\Http\Controllers\PreferenceController;
use App\Models\Coffee;

class ContentBasedFiltering extends Controller
{
    // protected $preferenceController;


    // public function __construct1(PreferenceController $preferenceController)
    // {
    //     $this->preferenceController = $preferenceController;
    // }

    public function contentBasedFiltering($preferenceId)
    {
        // Get user preference
        $preferenceController = new PreferenceController();
        $userPreferences = $preferenceController->getPreferencesById($preferenceId);

        // Get all coffees
        $coffees = Coffee::all();
        $menuItems = $coffees->map(function ($coffee) {
            return [
                'name' => $coffee->coffeeName,
                'description' => $coffee->coffeeDescription,
                'photo' => $coffee->coffeePhoto,
                'price' => $coffee->coffeePrice,
                'best_seller' => $coffee->coffeeIsBestSeller,
                'promo' => $coffee->coffeeIsPromo,
                'number_chosen' => $coffee->numberChosen,
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

        // Calculate cosine similarity for each menu item
        $recommendations = [];
        foreach ($menuItems as $menuItem) {
            // Calculate cosine similarity between user preferences and menu item
            $similarity = $this->calculateCosineSimilarity($userPreferences, $menuItem);
            // Store menu item name and similarity score
            $recommendations[$menuItem['name']] = $similarity;
        }

        // Sort recommendations by similarity score (higher scores first)
        arsort($recommendations);

        // Recommend top items to the user
        $topRecommendations = array_slice($recommendations, 0, 3, true); // Get top 3 recommendations

        // Output recommendations
        foreach ($topRecommendations as $itemName => $similarity) {
            echo "Recommended: $itemName (Similarity: $similarity)\n";
        }
    }

    // Function to calculate cosine similarity
    public function calculateCosineSimilarity($vectorA, $vectorB)
    {
        $dotProduct = 0;
        $magnitudeA = 0;
        $magnitudeB = 0;
        foreach ($vectorA as $key => $value) {
            if (isset ($vectorB[$key])) {
                $dotProduct += $value * $vectorB[$key];
            }
            $magnitudeA += $value ** 2;
        }
        foreach ($vectorB as $value) {
            $magnitudeB += $value ** 2;
        }
        $magnitudeA = sqrt($magnitudeA);
        $magnitudeB = sqrt($magnitudeB);
        if ($magnitudeA == 0 || $magnitudeB == 0) {
            return 0; // Prevent division by zero
        }
        return $dotProduct / ($magnitudeA * $magnitudeB);
    }

}

