<?php

use App\Room;
use Illuminate\Database\Seeder;

class RoomsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 20; $i++){
            $newRoom = new Room();
            $newRoom->number_bed = rand(1, 6);
            $newRoom->number_room = 100 + $i;
            $newRoom->price = rand(50,150);
            $newRoom->save();
        }
    }
}
