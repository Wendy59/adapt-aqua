<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home')->insert([
            'title' => "Adapt' Aqua",
            'description' => "Centre aquatique adapté et bien-être",
            'button' => "C'est parti",
            'background' => "",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
