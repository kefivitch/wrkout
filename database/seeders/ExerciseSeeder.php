<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Equipment;
use App\Models\Exercise;
use App\Models\Muscle;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exercises = file_get_contents(base_path('exercises.json'), true);
        $exercises = json_decode($exercises, true);
        $exercises = $exercises['exercises'];
        for ($i = 0; $i < count($exercises); ++$i) {
            $exercise = $exercises[$i];
            $data = [
                'name' => $exercise['name'],
                'force' => $exercise['force'],
                'level' => $exercise['level'],
                'mechanic' => $exercise['mechanic'],
                'instructions' => implode(PHP_EOL, $exercise['instructions']),
                'category_id' => Category::where('name', $exercise['category'])->first()->id,
                'equipment_id' => Equipment::where('name', $exercise['equipment'])->first()->id ?? 1,
            ];
            $exerciseModel = Exercise::create($data);

            // Attach muscles to exercise
            foreach ($exercise['primaryMuscles'] as $muscle) {
                $exerciseModel->muscles()->attach(
                    Muscle::where('name', $muscle)->first()->id,
                    ['is_primary' => true]
                );
            }
            foreach ($exercise['secondaryMuscles'] as $muscle) {
                $exerciseModel->muscles()->attach(
                    Muscle::where('name', $muscle)->first()->id,
                    ['is_primary' => false]
                );
            }
        }
    }
}
