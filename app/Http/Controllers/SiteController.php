<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SiteRepository;
use App\Repositories\HomeRepository;

class SiteController extends Controller
{
    protected $repo = null;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SiteRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        $datas = $this->getInformations();
        return view('index')->with([
            "tarif" => [
                "title1" => $datas['tarif']['title1'],
                "title2" => $datas['tarif']['title2'],
            ],
            "home" => [
                "title"         => $datas['home']['title'],
                "description"   => $datas['home']['description'],
                "button"        => $datas['home']['button'],
            ],
        ]);
    }
    
    
    
    private function getInformations(){
        $result = [];
        
        // Section tarif
        $tarif_titles = $this->repo->tarif_getTitle();
        $result['tarif']['title1'] = $tarif_titles->title1;
        $result['tarif']['title2'] = $tarif_titles->title2;
        
        // Section home
        $home_info = (new HomeRepository)->getInfos();
        $result['home']['title'] = $home_info->title;
        $result['home']['description'] = $home_info->description;
        $result['home']['button'] = $home_info->button;
        
        
        return $result;
    }
}
