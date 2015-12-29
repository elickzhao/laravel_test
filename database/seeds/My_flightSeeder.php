<?php

use Illuminate\Database\Seeder;

class My_flightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0;$i<10;$i++){
            DB::table('my_flights')->insert([
                'name'=>str_random(6),
                'airline'=>str_random(10),
                'created_at'=>Carbon\Carbon::now(),
                'updated_at'=>\Carbon\Carbon::now()
            ]);

        }
    }
}
