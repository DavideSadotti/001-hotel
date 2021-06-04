<?php

use App\Guest;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class GuestsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){
            $newGuest = new Guest();
            $newGuest->full_name = $faker->name();
            $newGuest->slug = Str::slug($newGuest->full_name, '-');
            $newGuest->save();
        }
    }
}
