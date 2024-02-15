<?php

namespace Database\Seeders;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type = ["frontend","Backend","Full-Stack","Data Analystics"];
        foreach($type as $typess){
            $typess = new Type();
            $typess->title = $typess;
            $typess->save();
        }

        
    }
}
