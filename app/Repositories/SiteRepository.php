<?php

namespace App\Repositories;

use App\Repositories\TarifsRepository;

class SiteRepository {

    public function tarif_getTitle(){
        $repo = new TarifsRepository();
        return $repo->getTitles();
    }

    
    
    
}
