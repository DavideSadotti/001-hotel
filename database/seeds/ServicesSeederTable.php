<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServicesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            'Tv',
            'Aria condizionata',
            'Wi-Fi',
            'Minibar',
            'Camera insonorizzata',
            'Terrazza',
            'Caffettiera',
            'Camera per disabili'
        ];

        foreach($services as $service){
            $newService = new Service();
            $newService->name = $service;
            $newService->save();
        }
    }
}
