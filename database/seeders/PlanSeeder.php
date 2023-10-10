<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;


class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Plan::create([
            'name' => 'Monthly Plan',
            'image' => 'image/monthly.jpg', // Use forward slashes
        ]);

        Plan::create([
            'name' => 'Quarter Plan',
            'image' => 'image/quarter.jpg', // Use forward slashes
        ]);

        Plan::create([
            'name' => 'Yearly Plan',
            'image' => 'image/yearly.jpg', // Use forward slashes
        ]);
    }
}
