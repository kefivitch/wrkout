<?php

namespace Database\Seeders;

use App\Models\Equipment;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Equipment::insert([
            [
                'name' => 'body only',
            ],
            [
                'name' => 'machine',
            ],
            [
                'name' => 'other',
            ],
            [
                'name' => 'foam roll',
            ],
            [
                'name' => 'kettlebells',
            ],
            [
                'name' => 'dumbbell',
            ],
            [
                'name' => 'cable',
            ],
            [
                'name' => 'barbell',
            ],
            [
                'name' => 'medicine ball',
            ],
            [
                'name' => 'bands',
            ],
            [
                'name' => 'exercise ball',
            ],
            [
                'name' => 'e-z curl bar',
            ],
        ]);
    }
}
