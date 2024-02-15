<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $tech = ["CSS","PHP","JS","HTML","VITE","VUE","BOOTSTRAP","BLADE"];
       foreach($tech as $technology){
        $newtechnology = new Technology();
        $newtechnology->tech = $technology;
        $newtechnology->save();
       } 
    }
}
