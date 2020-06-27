<?php

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
        $this->call(TeamSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(PromoSeeder::class);
        $this->call(StatisticSeeder::class);
        $this->call(PriceSeeder::class);
        $this->call(WorkSeeder::class);
    }
}
