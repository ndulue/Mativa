<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $room = new \App\Room([
            'image1' => 'src/images/rooms/room-1.jpg',
            'image2' => 'src/images/rooms/room-2.jpg',
            'image3' => 'src/images/rooms/room-3.jpg',
            'image4' => 'src/images/rooms/room-4.jpg',
            'image5' => 'src/images/rooms/room-5.jpg',
            'room_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Omnes enim iucundum motum, quo sensus hilaretur. Duo enim genera quae erant, fecit tria. Audax negotium, impudens, translatum philosophos nostros esset cum.',
            'add_desc' => 'Unum est sine dolore esse, alterum cum voluptate. Non risu potius quam oratione eiciendum? Mihi enim satis est, ipsis non satis. turpitudinis et comprobatione honestatis? Quae cum essent dicta, discessimus. Omnes enim iucundum motum, quo sensus hilaretur',
            'title' => 'Single Room',
            'price' => '20000',
            'feature1' => 'Beatus autem esse in maximarum',
            'feature2' => 'Voluptatem cum summum bonum diceret',
            'feature3' => 'Nihil opus est exemplis hoc facere longius'
        ]);

        $room->save();

        $room = new \App\Room([
            'image1' => 'src/images/rooms/room-3.jpg',
            'image2' => 'src/images/rooms/room-2.jpg',
            'image3' => 'src/images/rooms/room-1.jpg',
            'image4' => 'src/images/rooms/room-4.jpg',
            'image5' => 'src/images/rooms/room-5.jpg',
            'room_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Omnes enim iucundum motum, quo sensus hilaretur. Duo enim genera quae erant, fecit tria. Audax negotium, impudens, translatum philosophos nostros esset cum.',
            'add_desc' => 'Unum est sine dolore esse, alterum cum voluptate. Non risu potius quam oratione eiciendum? Mihi enim satis est, ipsis non satis. turpitudinis et comprobatione honestatis? Quae cum essent dicta, discessimus. Omnes enim iucundum motum, quo sensus hilaretur.',
            'title' => 'Double Room',
            'price' => '50000',
            'feature1' => 'Beatus autem esse in maximarum',
            'feature2' => 'Voluptatem cum summum bonum diceret',
            'feature3' => 'Nihil opus est exemplis hoc facere longius'
        ]);

        $room->save();

        
        $room = new \App\Room([
            'image1' => 'src/images/rooms/room-5.jpg',
            'image2' => 'src/images/rooms/room-4.jpg',
            'image3' => 'src/images/rooms/room-3.jpg',
            'image4' => 'src/images/rooms/room-2.jpg',
            'image5' => 'src/images/rooms/room-1.jpg',
            'room_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Omnes enim iucundum motum, quo sensus hilaretur. Duo enim genera quae erant, fecit tria. Audax negotium, impudens, translatum philosophos nostros esset cum.',
            'add_desc' => 'Unum est sine dolore esse, alterum cum voluptate. Non risu potius quam oratione eiciendum? Mihi enim satis est, ipsis non satis. turpitudinis et comprobatione honestatis? Quae cum essent dicta, discessimus. Omnes enim iucundum motum, quo sensus hilaretur.',
            'title' => 'Premier Room',
            'price' => '80000',
            'feature1' => 'Beatus autem esse in maximarum',
            'feature2' => 'Voluptatem cum summum bonum diceret',
            'feature3' => 'Nihil opus est exemplis hoc facere longius'
        ]);

        $room->save();

        
        $room = new \App\Room([
            'image1' => 'src/images/rooms/room-4.jpg',
            'image2' => 'src/images/rooms/room-2.jpg',
            'image3' => 'src/images/rooms/room-3.jpg',
            'image4' => 'src/images/rooms/room-1.jpg',
            'image5' => 'src/images/rooms/room-5.jpg',
            'room_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Omnes enim iucundum motum, quo sensus hilaretur. Duo enim genera quae erant, fecit tria. Audax negotium, impudens, translatum philosophos nostros esset cum.',
            'add_desc' => 'Unum est sine dolore esse, alterum cum voluptate. Non risu potius quam oratione eiciendum? Mihi enim satis est, ipsis non satis. turpitudinis et comprobatione honestatis? Quae cum essent dicta, discessimus. Omnes enim iucundum motum, quo sensus hilaretur.',
            'title' => 'Deluxe Room',
            'price' => '120000',
            'feature1' => 'Beatus autem esse in maximarum',
            'feature2' => 'Voluptatem cum summum bonum diceret',
            'feature3' => 'Nihil opus est exemplis hoc facere longius'
        ]);

        $room->save();
    }
}
