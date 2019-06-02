<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class TarifsRepository {
    
    protected $table = "prices";
    protected $table_subscription = "prices_subscription";
    protected $table_subscription_contents = "prices_subscription_contents";
    protected $table_subscription_notes = "prices_subscription_notes";

    /**
     * Retourne les deux titres de la section tarif
     * @return boolean
     */
    public function getTitles(){
        $result = DB::table($this->table)
            ->select('title1', 'title2')
            ->first();

        //If element exist
        if($result !=  null){
            return $result;
        }
        
        return false;
    }

    /**
     * Update un des deux titres de la section tarif
     * @param type $field
     * @param type $title
     * @return boolean
     */
    public function updateTitle($field, $title){        
        $element = DB::table($this->table)
                ->update([
                    $field => $title,
                    'updated_at' => now()
        ]);
        
        //If element exist
        if($element !=  null){
            return $element;
        }
        
        return false;
    }
    
    /**
     * Retourne la liste des prix avec engagements
     * @return boolean
     */
    public function getPricesSubscription(){
        $result = DB::table($this->table_subscription)
            ->select('*')
            ->whereNull('deleted_at')
            ->get();

        //If element exist
        if($result !=  null){
            return $result;
        }
        
        return false;
    }
    
    /**
     * Retourne tous les contenus des prix avec engagement
     * @return boolean
     */
    public function getAllPricesSubscriptionContents(){
        $result = DB::table($this->table_subscription_contents)
            ->select('*')
            ->whereNull('deleted_at')
            ->get();

        //If element exist
        if($result !=  null){
            return $result;
        }
        
        return false;
    }
    
    /**
     * Retourne tous les notes des prix avec engagement
     * @return boolean
     */
    public function getAllPricesSubscriptionNotes(){
        $result = DB::table($this->table_subscription_notes)
            ->select('*')
            ->whereNull('deleted_at')
            ->get();

        //If element exist
        if($result !=  null){
            return $result;
        }
        
        return false;
    }
    
}
