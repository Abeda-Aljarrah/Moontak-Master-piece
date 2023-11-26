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
            'description' =>'Once a Week for 20 JOD, Twice a Week for 30 JOD, twice a month for 10 JOD'
        ]);

        Plan::create([
            'name' => 'Quarter Plan',
            'image' => 'image/quarter.jpg', // Use forward slashes
            'description' =>'Once a Month for 20 JOD, Once a Week for 50 JOD, Twice a Month for 30 JOD'
        ]);

        Plan::create([
            'name' => 'Yearly Plan',
            'image' => 'image/yearly.jpg', // Use forward slashes
            'description' =>'Once a Month for 80 JOD, Once Every Two Months for 35 JOD, Twice a Month for 30 JOD'
        ]);
    }
}
