<?php

namespace Database\Seeders;

use Faker\Generator as Faker;

use Illuminate\Database\Seeder;
use App\Models\Hat;

class HatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {




        for ($i = 0; $i < 10; $i++) {
            $hat = new Hat();
            $hat->sku = '##' . $faker->bothify('??##');
            $hat->name = $faker->words(4, true);
            $hat->image = $faker->imageUrl(600, 400, 'hats', true, $hat->name, true, 'jpg');
            $hat->brand = $faker->word();
            $hat->description = $faker->text();
            $hat->size = $faker->randomElement(['sm', 'md', 'lg', 'Taglia unica']);
            $hat->price = $faker->randomFloat(2, 10.00, 99.99);
            $hat->color = $faker->colorName();
            $hat->is_available = $faker->boolean();
            // Save your data
            $hat->save();
        }



        /* Pseudo data from your array */
        //$hats = config('db.hats');


        /*  foreach ($hats as $hat) {
            $newHat = new Hat();
            $newHat->sku = $hat['sku'];
            $newHat->name = $hat['name'];
            $newHat->image = $hat['image'];
            $newHat->brand = $hat['brand'];
            $newHat->description = $hat['description'];
            $newHat->size = $hat['size'];
            $newHat->price = $hat['price'];
            $newHat->color = $hat['color'];
            $newHat->is_available = $hat['is_available'];
            // Save your data
            $newHat->save();
        } */
    }
}
