<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class HomeRepository {
    
    protected $table = "home";

    /**
     * Retourne les info pour la vue home
     * @return boolean
     */
    public function getInfos(){
        $result = DB::table($this->table)
            ->select('title', 'description', 'button')
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
    public function updateHome($title, $description, $button){        
        $home = DB::table($this->table)
                ->update([
                    'title' => $title,
                    'description' => $description,
                    'button' => $button,
                    'updated_at' => now()
        ]);
        
        //If home exist
        if($home !=  null){
            return $home;
        }
        
        return false;
    }
    
}
