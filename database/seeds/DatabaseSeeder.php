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
        $this->call([
            ServicesSeederTable::class,
            RoomsSeederTable::class,
            ClientsSeederTable::class,
            GuestsSeederTable::class,
            InformationsSeederTable::class,
            ReservationsSeederTable::class
        ]);
    }
}
