<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name' => 'Cahiers'
        ]);

        Category::create([
        	'name' => 'Accessoires'
        ]);

        Category::create([
        	'name' => 'Albums Musique'
        ]);

        Category::create([
            'name' => 'Autres'
        ]);
    }
}
