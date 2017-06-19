<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Athlete;
use App\Velocity;
use App\Competition;

class Pages extends Controller
{
    private $path = "pages/";

    public function index(){
        return view($this->path.'index');
    }

    public function about(){
        $ath = Athlete::whereActive(1)->get();
        return view($this->path.'about', ['athletes'=>$ath]);
    }

    public function calendar(){
        return view($this->path.'calendar');
    }

    public function contact(){
        return view($this->path.'contact');
    }

    public function records(){
        $data = [];
        foreach(Velocity::with('athlete')->get()->groupBy('track') as $key => $value){
	         $min = $value->where('athlete.genre','female')->where('field','AL')->min('result');
           $data['AL'][$key]['fem']=$value->where('result', $min)->first();

           $min = $value->where('athlete.genre','female')->where('field','PC')->min('result');
           $data['PC'][$key]['fem']=$value->where('result', $min)->first();

           $min = $value->where('athlete.genre','male')->where('field','AL')->min('result');
           $data['AL'][$key]['masc']=$value->where('result', $min)->first();

           $min = $value->where('athlete.genre','male')->where('field','PC')->min('result');
           $data['PC'][$key]['masc']=$value->where('result', $min)->first();

         }
        //return $data;
        return view($this->path.'records', ['results'=>$data]);
    }
}
