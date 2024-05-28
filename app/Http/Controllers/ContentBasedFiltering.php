<?php
namespace App\Http\Controllers;

use App\Http\Controllers\PreferenceController;
use App\Models\Coffee;
use Illuminate\Support\Facades\Session;

class ContentBasedFiltering extends Controller
{
    public $finalTopRecommendation = [];
    public function contentBasedFiltering($preferenceId)
    {
        // Get user preference
        $preferenceController = new PreferenceController();
        $userPreferences = $preferenceController->getPreferencesById($preferenceId);

        // Get all coffees
        $hasCafeId = Session::has('cafeId');
        if ($hasCafeId) {
            $cafeId = Session::get('cafeId');
            $coffees = Coffee::where('cafeId', $cafeId)->get();

            $coffeeIDs = $coffees->pluck('id');
        } else {
            $coffees = Coffee::all();
        }

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
        $countingCount = -1;
        foreach ($menuItems as $menuItem) {
            // Calculate cosine similarity between user preferences and menu item
            $valuesArray1 = array_values($userPreferences);
            $valuesArray2 = array_values($menuItem);
            $similarity = $this->cosine_similarity($valuesArray1, $valuesArray2);

            // Store menu item name and similarity score
            if ($hasCafeId) {
                $countingCount += 1;
                $recommendations[] = [
                    'coffee_id' => $coffeeIDs[$countingCount],
                    'similarity' => $similarity,
                ];
            } else {
                $recommendations[] = $similarity;
            }
        }

        // Sort recommendations by similarity score (higher scores first)
        if ($hasCafeId) {
            $notSortedRecommendation = $recommendations;
            usort($recommendations, function ($a, $b) {
                return $b['similarity'] <=> $a['similarity'];
            });
            // All sorted items
            $sortRecommendations = $recommendations;
            $sortedCoffeeIds = array_column($sortRecommendations, 'coffee_id');

            // Get the top 3 items
            $top3Recommendations = array_slice($sortRecommendations, 0, 3);
            $top3CoffeeIds = array_column($top3Recommendations, 'coffee_id');

            dd($coffeeIDs, $sortRecommendations, $notSortedRecommendation, $top3Recommendations, $sortedCoffeeIds, $top3CoffeeIds);

            return array($sortedCoffeeIds, $top3CoffeeIds);

        } else {
            arsort($recommendations);
            $sortRecommendations = $recommendations;

            foreach ($sortRecommendations as $key => $value) {
                // Get all recommendations
                $thisSortRecommendations[] = $key + 1;
            }
            $finalSortRecommendation = $thisSortRecommendations;

            // Recommend top items to the user
            $topRecommendations = array_slice($recommendations, 0, 3, true);
            foreach ($topRecommendations as $key => $value) {
                // Get top 3 recommendations
                $thisTopRecommendations[] = $key + 1;
            }
            $finalTopRecommendation = $thisTopRecommendations;

            // Return both $thisSortRecommendations and $finalTopRecommendation
            return array($finalSortRecommendation, $finalTopRecommendation);
        }
    }

    // Function to calculate cosine similarity
    public function cosine_similarity($array1, $array2)
    {
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

