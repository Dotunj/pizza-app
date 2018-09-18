<?php

use Illuminate\Database\Seeder;

class ToppingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Topping::class, 30)->create();
    }
}
