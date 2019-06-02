<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            'title' => "Contact",
            'description' => "Vous souhaitez nous contacter, voici nos coordonnées",
            'mail' => "adaptaqua3@gmail.com",
            'facebook' => "https://www.facebook.com/adaptaqua/",
            'maps' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2507.9630870623455!2d2.4317867156550212!3d51.05376937956315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc8deeea451ffd%3A0xc845b72b839bc6d4!2sAdapt&#39;aqua!5e0!3m2!1sfr!2sfr!4v1546360437125",
            'adress1' => "99 Boulevard Jean-Baptiste Trystram",
            'adress2' => "59495 Leffrinckoucke",
            'adress3' => "",
            'tel' => "06 42 63 20 03",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
