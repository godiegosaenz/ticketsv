<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $categories = [
            "Sin Categoria", "Planificacion Territorial", "Transito", "Avaluos y Catastro"
        ];

        foreach($categories as $category)
        {
            Category::create([
                'name'  => $category,
                'color' => $faker->hexcolor
            ]);
        }
    }
}
