<?php

use Illuminate\Database\Seeder;
use App\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Restaurant = new \App\Restaurant([
            'period' => 'Breakfast',
            'menu_title' => 'scotch egg',
            'menu_desc' => 'delightfull meal',
            'price' => '400'
        ]);

        $Restaurant->save();

        $Restaurant = new \App\Restaurant([
            'period' => 'Lunch',
            'menu_title' => 'fufu & egusi',
            'menu_desc' => 'delightfull meal',
            'price' => '500'
        ]);

        $Restaurant->save();

        $Restaurant = new \App\Restaurant([
            'period' => 'Dinner',
            'menu_title' => 'pepper soup',
            'menu_desc' => 'delightfull meal',
            'price' => '800'
        ]);

        $Restaurant->save();

        $Restaurant = new \App\Restaurant([
            'period' => 'Breakfast',
            'menu_title' => 'toast bread',
            'menu_desc' => 'awesome meal',
            'price' => '400'
        ]);

        $Restaurant->save();

        $Restaurant = new \App\Restaurant([
            'period' => 'Lunch',
            'menu_title' => 'amala and ewedu',
            'menu_desc' => 'awesome meal',
            'price' => '800'
        ]);

        $Restaurant->save();

        $Restaurant = new \App\Restaurant([
            'period' => 'Dinner',
            'menu_title' => 'scotch egg',
            'menu_desc' => 'awesome meal',
            'price' => '600'
        ]);

        $Restaurant->save();

        $Restaurant = new \App\Restaurant([
            'period' => 'Breakfast',
            'menu_title' => 'Tea and bread',
            'menu_desc' => 'Made from the best ingredient',
            'price' => '300'
        ]);

        $Restaurant->save();

        $Restaurant = new \App\Restaurant([
            'period' => 'Lunch',
            'menu_title' => 'Yam and egg sauce',
            'menu_desc' => 'Made from the best ingredient',
            'price' => '600'
        ]);

        $Restaurant->save();

        $Restaurant = new \App\Restaurant([
            'period' => 'Dinner',
            'menu_title' => 'Beans and plantain',
            'menu_desc' => 'Made from the best ingredient',
            'price' => '800'
        ]);

        $Restaurant->save();

        $Restaurant = new \App\Restaurant([
            'period' => 'Breakfast',
            'menu_title' => 'potatoes and stew',
            'menu_desc' => 'great',
            'price' => '500'
        ]);

        $Restaurant->save();

        $Restaurant = new \App\Restaurant([
            'period' => 'Lunch',
            'menu_title' => 'Jollof rice',
            'menu_desc' => 'great',
            'price' => '900'
        ]);

        $Restaurant->save();

        $Restaurant = new \App\Restaurant([
            'period' => 'Dinner',
            'menu_title' => 'Pepper soup',
            'menu_desc' => 'great',
            'price' => '800'
        ]);

        $Restaurant->save();
    }
}
