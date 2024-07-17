<?php

namespace Database\Seeders;

use App\Models\Muscle;
use Illuminate\Database\Seeder;

class MuscleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Muscle::insert([
            [
                'name' => 'abdominals',
            ],
            [
                'name' => 'hamstrings',
            ],
            [
                'name' => 'adductors',
            ],
            [
                'name' => 'quadriceps',
            ],
            [
                'name' => 'biceps',
            ],
            [
                'name' => 'shoulders',
            ],
            [
                'name' => 'chest',
            ],
            [
                'name' => 'middle back',
            ],
            [
                'name' => 'calves',
            ],
            [
                'name' => 'glutes',
            ],
            [
                'name' => 'lower back',
            ],
            [
                'name' => 'lats',
            ],
            [
                'name' => 'triceps',
            ],
            [
                'name' => 'traps',
            ],
            [
                'name' => 'forearms',
            ],
            [
                'name' => 'neck',
            ],
            [
                'name' => 'abductors',
            ],
        ]);
    }
}
