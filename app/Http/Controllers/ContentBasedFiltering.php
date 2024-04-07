<?php
namespace App\Http\Controllers;

use App\Http\Controllers\PreferenceController;
use App\Models\Coffee;

class ContentBasedFiltering extends Controller
{
    public $finalTopRecommendation = [];
    public function contentBasedFiltering($preferenceId)
    {
        // Get user preference
        $preferenceController = new PreferenceController();
        $userPreferences = $preferenceController->getPreferencesById($preferenceId);

        // Get all coffees
        $coffees = Coffee::all();
        $menuItems = $coffees->map(function ($coffee) {
            return [
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
            $valuesArray1 = array_values($userPreferences);
            $valuesArray2 = array_values($menuItem);
            $similarity = $this->cosine_similarity($valuesArray1, $valuesArray2);

            // Store menu item name and similarity score
            $recommendations[] = $similarity;
        }

        // Sort recommendations by similarity score (higher scores first)
        arsort($recommendations);

        // Recommend top items to the user
        $topRecommendations = array_slice($recommendations, 0, 4, true);
        foreach($topRecommendations as $key => $value) {
            // Get top 3 recommendations
            $thisTopRecommendations[] = $key + 1;
        }

        $finalTopRecommendation = $thisTopRecommendations;
        return $finalTopRecommendation;
    }

    // Function to calculate cosine similarity
    public function cosine_similarity($array1, $array2) {
        $dotProduct = 0;
        $magnitude1 = 0;
        $magnitude2 = 0;

        // Calculate dot product
        for ($i = 0; $i < count($array1); $i++) {
            $dotProduct += $array1[$i] * $array2[$i];
            $magnitude1 += $array1[$i] * $array1[$i];
            $magnitude2 += $array2[$i] * $array2[$i];
        }

        $magnitude1 = sqrt($magnitude1);
        $magnitude2 = sqrt($magnitude2);

        // Calculate cosine similarity
        if ($magnitude1 != 0 && $magnitude2 != 0) {
            $cosineSimilarity = $dotProduct / ($magnitude1 * $magnitude2);
            return $cosineSimilarity;
        } else {
            return 0; // If one of the magnitudes is zero, similarity is zero
        }
    }

}

