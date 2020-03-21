<?php

use Illuminate\Database\Seeder;

class ServicelistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Servicelist = new \App\Servicelist([
            'tag' => 'Hotel & Resort',
            'image' => 'images/service-1.jpg',
            'description' => 'Enjoy our comfortable and luxury room with constant electricity and free wifi'
        ]);

        $Servicelist->save();

        $Servicelist = new \App\Servicelist([
            'tag' => 'Restaurant',
            'image' => 'images/service-2.jpg',
            'description' => 'With our world class chefs, you will enjoy our delicious delicacies'
        ]);

        $Servicelist->save();

        $Servicelist = new \App\Servicelist([
            'tag' => 'Spa',
            'image' => 'images/service-3.jpg',
            'description' => 'Relax in our spa and get the right treatment to calm your nerve'
        ]);

        $Servicelist->save();

        $Servicelist = new \App\Servicelist([
            'tag' => 'Outdoor',
            'image' => 'images/service-4.jpg',
            'description' => 'Enjoy the various outdoor sports we provide like swimming and tennis'
        ]);

        $Servicelist->save();
    }
}
