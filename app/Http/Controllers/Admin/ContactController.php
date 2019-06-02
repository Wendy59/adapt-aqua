<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Utils\JsonResponse;
use App\Repositories\ContactRepository;

class ContactController extends Controller
{
    protected $repo = null;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ContactRepository $repo)
    {
        $this->repo = $repo;
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $infos = $this->repo->getInfos();
        return view('admin.contact', [
            'infos' => [
                'title' => $infos->title,
                'description' => $infos->description,
                'adress1' => $infos->adress1,
                'adress2' => $infos->adress2,
                'adress3' => $infos->adress3,
                'mail' => $infos->mail,
                'tel' => $infos->tel,
                'maps' => $infos->maps,
                'facebook' => $infos->facebook,
            ],
        ]);
    }
    
    public function update(Request $request){
        $ret = new JsonResponse();
        
        // Valid datas
        $validator = Validator::make($request->all(), [
            "title" => "required",
            "description" => "required",
            "adress1" => "required",
            "adress2" => "",
            "adress3" => "",
            "mail" => "required",
            "tel" => "required",
            "maps" => "required",
            "facebook" => "required",
        ]);
        
        // Check if the datas are valid
        if ($validator->fails()) {
            $ret->setError($validator->errors());
	    return $ret->send();
        }
                        
        // update title  
        $updated = $this->repo->update(
            $request->get('title'), $request->get('description'),
            $request->get('adress1'), $request->get('adress2'), $request->get('adress3'),
            $request->get('maps'), $request->get('facebook'), $request->get('mail'), $request->get('tel'));
        $ret->setSuccess($updated);
        
        //Set params into data
        $ret->setData([
            "title" => $request->get('title'),
            "description" => $request->get('description'),
            "adress1" => $request->get('adress1'),
            "adress2" => $request->get('adress2'),
            "adress3" => $request->get('adress3'),
            "mail" => $request->get('mail'),
            "tel" => $request->get('tel'),
            "maps" => $request->get('maps'),
            "facebook" => $request->get('facebook'),
        ]);
        
        return $ret->send();
    }
    
    
}
