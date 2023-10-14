<?php

namespace Database\Seeders;

use App\Models\Period;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Period::create([
            'price'=>'10',
            'plan_id'=>'1',
            'title'=>'once a week',
        ]);
        Period::create([
            'price'=>'20',
            'plan_id'=>'1',
            'title'=>'twice a week',
        ]);
        Period::create([
            'price'=>'30',
            'plan_id'=>'1',
            'title'=>'twice a month',
        ]);
        Period::create([
            'price'=>'40',
            'plan_id'=>'2',
            'title'=>'once a month',
        ]);
        Period::create([
            'price'=>'50',
            'plan_id'=>'2',
            'title'=>'once a week',
        ]);
        Period::create([
            'price'=>'60',
            'plan_id'=>'2',
            'title'=>'twice a month',
        ]);
        Period::create([
            'price'=>'70',
            'plan_id'=>'3',
            'title'=>'once a month',
        ]);
        Period::create([
            'price'=>'80',
            'plan_id'=>'3',
            'title'=>'once a week',
        ]);
        Period::create([
            'price'=>'90',
            'plan_id'=>'3',
            'title'=>'once every two months',
        ]);
    }
}
