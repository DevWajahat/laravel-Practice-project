<?php

namespace Database\Seeders;

use App\Models\Attribute as ModelsAttribute;
use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributes = [
            ['name' => 'Size'],
            ['name' => 'Color']
        ];
        foreach($attributes as $attr){
            Attribute::create($attr);
        }
    }
}
