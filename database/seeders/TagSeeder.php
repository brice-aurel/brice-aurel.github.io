<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tag::create(['name' => '#Humour']);
        // Tag::create(['name' => '#Fun']);
        // Tag::create(['name' => '#Rouge']);
        Tag::factory()->count(3)->create();
    }
}
