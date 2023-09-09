<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Mesas de centro',
            'Muebles de TV',
            'Sofá cama',
            'Escritorios',
            'Laptops',
            'Espejos',
            'Comedores',
            'Autos y motocicletas',
        ];

        foreach ($categories as $order => $category) {
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category),
                'order' => $order +1,
            ]);
        }
    }
}
