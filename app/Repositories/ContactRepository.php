<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class ContactRepository {
    
    protected $table = "contact";

    /**
     * Retourne les info pour la vue home
     * @return boolean
     */
    public function getInfos(){
        $result = DB::table($this->table)
            ->select('*')
            ->first();

        //If element exist
        if($result !=  null){
            return $result;
        }
        
        return false;
    }
    
    /**
     * Update home table
     * @param type $title
     * @param type $description
     * @param type $button
     * @return boolean
     */
    public function update($title, $description, $adress1, $adress2, $adress3, $maps, $facebook, $mail, $tel){        
        $home = DB::table($this->table)
                ->update([
                    'title' => $title,
                    'description' => $description,
                    'adress1' => $adress1,
                    'adress2' => $adress2,
                    'adress3' => $adress3,
                    'maps' => $maps,
                    'facebook' => $facebook,
                    'mail' => $mail,
                    'tel' => $tel,
                    'updated_at' => now()
        ]);
        
        //If home exist
        if($home !=  null){
            return $home;
        }
        
        return false;
    }
}
