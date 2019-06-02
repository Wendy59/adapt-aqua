<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Utils\JsonResponse;
use App\Repositories\HomeRepository;

class HomeController extends Controller
{
    protected $repo = null;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(HomeRepository $repo)
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
        return view('admin.home', [
            'infos' => [
                'title' => $infos->title,
                'description' => $infos->description,
                'button' => $infos->button,
            ],
        ]);
    }
    
    public function update(Request $request){
        $ret = new JsonResponse();
        
        // Valid datas
        $validator = Validator::make($request->all(), [
            "title" => "required",
            "description" => "required",
            "button" => "required",
        ]);
        
        // Check if the datas are valid
        if ($validator->fails()) {
            $ret->setError($validator->errors());
	    return $ret->send();
        }
                        
        // update title  
        $updated = $this->repo->updateHome($request->get('title'), $request->get('description'), $request->get('button'));
        $ret->setSuccess($updated);
        
        //Set params into data
        $ret->setData([
            "title" => $request->get('title'),
            "description" => $request->get('description'),
            "button" => $request->get('button'),
        ]);
        
        return $ret->send();
    }
    
    
}
