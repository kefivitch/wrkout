<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'name' => 'strength',
            ],
            [
                'name' => 'stretching',
            ],
            [
                'name' => 'plyometrics',
            ],
            [
                'name' => 'strongman',
            ],
            [
                'name' => 'powerlifting',
            ],
            [
                'name' => 'cardio',
            ],
            [
                'name' => 'olympic weightlifting',
            ],
        ]);
    }
}
