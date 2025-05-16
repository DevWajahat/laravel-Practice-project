<?php

namespace Database\Seeders;

use App\Models\Attribute as ModelsAttribute;
use App\Models\Variant;
use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sizeVariants = [
            ['name' => 'small'],
            ['name' => 'medium'],
            ['name' => 'large'],
        ];

        $colorVariants = [
            ['name' => 'red'],
            ['name' => 'blue'],
            ['name' => 'green'],
        ];

        $attributes = Attribute::all();
        foreach ($attributes as $attr) {
            if ($attr->name == 'Size') {
                $attr->variants()->createMany($sizeVariants);
            } else {
                $attr->variants()->createMany($colorVariants);
            }
        }

        
    }
}
