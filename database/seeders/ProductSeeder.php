<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'nokia',
                'price'=>'5883',
                'category'=>'mobile',
                'description'=>'SQDSFDGFHGJHHGFDSDZFEGR',
                'gallery'=>'https://static.meilleur-mobile.com/images-product/mobiles/180x300/telephone-lg-g4c-4636.jpg',
            ],
            [
                'name'=>'OPPO',
                'price'=>'202580',
                'category'=>'mobile',
                'description'=>'Sqdsfdgrhtjythregzfad zfeg',
                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJ0h2teynD0TQWjs79Lu4byS-9AJy1xQFkHQ&usqp=CAU',
            ],
            [
                'name'=>'alooo',
                'price'=>'8385',
                'category'=>'TV',
                'description'=>'    aezretrytuyikulkjreretrh',
                'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06193656/Blue_Q60_Thumb-350_upd.jpg',
            ],
            [
                'name'=>'zrt',
                'price'=>'20680',
                'category'=>'TV',
                'description'=>'SQDSFERTYKULIMLUKYJTRHEZA',
                'gallery'=>'https://www.91-img.com/pictures/140182-v2-lg-wing-mobile-phone-large-1.jpg?tr=q-60',
            ],
            [
                'name'=>'UYKY',
                'price'=>'8765353',
                'category'=>'TABLETTE',
                'description'=>'0000000000000000000000000000000000',
                'gallery'=>'https://www.lg.com/ch_fr/images/telephones-mobiles-smartphone/md07518562/md07518562-350x350.jpg',
            ]
            
           ]);
    }
}
