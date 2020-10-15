<?php

namespace Database\Seeders;

use Database\Factories\PostFactory;
use Database\Factories\TagFactory;
use Illuminate\Database\Seeder;

class RegressionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostFactory::new()->times(5)->create();
        TagFactory::new()->times(3)->create();

        PostFactory::new()->create([
            'user_id' => 4,
        ]);
    }
}
