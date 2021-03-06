<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'UPVC',
                'slug' => 'upvc'
            ],
            [
                'title' => 'Aluminium',
                'slug' => 'aluminium'
            ],
        ];

        ProductCategory::insert($data);
    }
}
