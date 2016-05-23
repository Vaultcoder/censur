<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


        DB::table('users')->insert([
            'name' => 'Leo Magnusson',
            'email' => 'spiced_gold_@hotmail.com',
            'password' => bcrypt('123actofwarQQ'),
        ]);
        DB::table('users')->insert([
            'name' => 'Troll',
            'email' => 'leo_magnusson_@hotmail.com',
            'password' => bcrypt('123actofwarSWE'),
        ]);
        DB::table('sweden')->insert([
            'country' => 'sweden',
            'title' => 'darksoul',
            'picture' => 'img/sweden-flag.gif',
            'text' => 'shit going down, in sweden',

        ]);
        DB::table('syria')->insert([
            'country' => 'syria',
            'title' => 'syria',
            'picture' => 'img/syria-flag.png',
            'text' => 'the syrian war tappign up.',
        ]);
        DB::table('india')->insert([
            'country' => 'india',
            'title' => 'india',
            'picture' => 'img/india-flag.gif',
            'text' => 'the indian war tappign up.',
        ]);
        DB::table('china')->insert([
            'country' => 'china',
            'title' => 'china',
            'picture' => 'img/china-flag.png',
            'text' => 'the china war tappign up.',
        ]);
        DB::table('vietnamn')->insert([  
            'country' => 'vietnamn',
            'title' => 'vietnamn',
            'picture' => 'img/vietnamn-flag.png',
            'text' => 'the vietnamn war tappign up.',
        ]);

                // ['message' => 'A new comment.']

            // $country_list = new App\Country_list();
            // $country_list->save();
            // $post = App\Sweden::find(1);
            // $country_list->sweden()->save($post);
            $country_list = new App\Country_list();
            $sweden = App\India::find(1);
            $sweden->country_list()->save($country_list);
            $sweden = App\Sweden::find(1);
            $sweden->country_list()->save($country_list);
            $sweden = App\China::find(1);
            $sweden->country_list()->save($country_list);
            $sweden = App\Syria::find(1);
            $sweden->country_list()->save($country_list);
            $sweden = App\Vietnamn::find(1);
            $sweden->country_list()->save($country_list);

            var_dump($sweden);

            Model::reguard();

    }
}
