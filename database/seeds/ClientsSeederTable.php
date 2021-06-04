<?php

use App\Client;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ClientsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $newClient = new CLient();
            $newClient->full_name = $faker->name();
            $newClient->slug = Str::slug($newClient->full_name, '-');
            $newClient->save();
        }
    }
}
