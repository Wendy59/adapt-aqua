<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SiteRepository;
use App\Repositories\HomeRepository;
use App\Repositories\ContactRepository;

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
            "contact" => [
                "title"         => $datas['contact']['title'],
                "description"   => $datas['contact']['description'],
                "mail"          => $datas['contact']['mail'],
                "facebook"      => $datas['contact']['facebook'],
                "maps"          => $datas['contact']['maps'],
                "adress1"       => $datas['contact']['adress1'],
                "adress2"       => $datas['contact']['adress2'],
                "adress3"       => $datas['contact']['adress3'],
                "tel"           => $datas['contact']['tel'],
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
        
        // Section contact
        $contact_info = (new ContactRepository)->getInfos();
        $result['contact']['title'] = $contact_info->title;
        $result['contact']['description'] = $contact_info->description;
        $result['contact']['mail'] = $contact_info->mail;
        $result['contact']['facebook'] = $contact_info->facebook;
        $result['contact']['maps'] = $contact_info->maps;
        $result['contact']['adress1'] = $contact_info->adress1;
        $result['contact']['adress2'] = $contact_info->adress2;
        $result['contact']['adress3'] = $contact_info->adress3;
        $result['contact']['tel'] = $contact_info->tel;
        
        return $result;
    }
}
