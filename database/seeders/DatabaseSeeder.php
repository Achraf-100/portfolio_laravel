<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AboutSeeders::class,
            FactSeeder::class,
            PortfolioSeeder::class,
            SkillSeeder::class,
            ContactSeeders::class,
            ]);
        // $this->call([FactSeeder::class]);
        // $this->call([SkillSeeder::class]);
        // $this->call([PortfolioSeeder::class]);
    }
}
