<?php

use App\Client;
use App\Reservation;
use App\Room;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ReservationsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $newReservation = new Reservation();
            $client = Client::inRandomOrder()->first();
            $newReservation->client_id = $client->id;
            $room = Room::inRandomOrder()->first();
            $newReservation->room_id = $room->id;
            $newReservation->price = rand(50,1000);
            $newReservation->check_in = $faker->date();
            $newReservation->check_out = $faker->date();
            $newReservation->save();
        }
    }
}
