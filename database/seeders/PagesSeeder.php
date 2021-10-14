<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pages;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $faker = \Faker\Factory::create();

      for ($i = 1; $i < 10; $i++ ){
      $Page = new Pages();
      $Page->title = $faker->company();
      $Page->description = $faker->text(100);
      $Page->save();
      }
    }
}
