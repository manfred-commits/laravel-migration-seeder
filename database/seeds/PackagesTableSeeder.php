<?php

use Illuminate\Database\Seeder;
use App\Package;
use Faker\Generator as Faker;
class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<100;$i++){
            $newPackage = new Package();
            $newPackage->code = $faker->isbn10();
            $newPackage->title = $faker->word();
            $newPackage->number_of_locations = $faker->randomNumber(3, false);
            $newPackage->nuber_of_persons = $faker->randomDigit();
            $newPackage->description = $faker->paragraph(4);
            $newPackage->price = $faker->randomFloat(2, 100, 500);
            $newPackage->save();
        }
    }
}
