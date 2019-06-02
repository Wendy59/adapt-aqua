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
    
}
