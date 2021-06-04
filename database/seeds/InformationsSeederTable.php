<?php

use App\Client;
use App\Guest;
use App\Information;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class InformationsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $genres = [
             'm',
             'f',
         ];

        for($i = 0; $i < 30; $i++){
            $newInformation = new Information();
            $rand = rand(0,1);
            if($rand == 0){
                $client = Client::inRandomOrder()->first();
                $newInformation->client_id = $client->id;
            }else{
                $guest = Guest::inRandomOrder()->first();
                $newInformation->guest_id = $guest->id;
            }
            $newInformation->codice_fiscale = Str::random(16);
            $newInformation->born_year = $faker->date();
            $newInformation->genre = $genres[array_rand($genres)];
            $newInformation->disability = rand(0,1);
            $newInformation->save();
        }
    }
}
