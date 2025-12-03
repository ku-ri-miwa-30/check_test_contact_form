<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'first_name' => 'Yamada',
            'last_name' => 'hANAKO',
            'gender' => 3,
            'email' => 'GEGRTH@GMAIL.COM',
            'tel' => 111222223333,
            'address' => '横田市三丁目',
            'building' => 'ガーデン908',
            'detail' => '商品の交換をお願いします'
        ];
        DB::table('contacts')->insert($param);

        $param = [
            'first_name' => 'Sasaki',
            'last_name' => 'Don',
            'gender' => 1,
            'email' => 'kovhdf@gmail.com',
            'tel' => 88899991111,
            'address' => '南東市三丁目',
            'building' => 'ガーデン208',
            'detail' => '領収書をください'
        ];
        DB::table('contacts')->insert($param);

        $param = [
            'first_name' => 'Keiod',
            'last_name' => 'Kontiki',
            'gender' => 1,
            'email' => 'dgufebi@gmail.com',
            'tel' => 77744446666,
            'address' => '慶弔市中原2丁目',
            'building' => '滝沢403',
            'detail' => '商品の交換をお願いします'
        ];
        DB::table('contacts')->insert($param);
    }
}
