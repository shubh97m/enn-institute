<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Models\Sliders;
use Validations\Validate as Validations;
use App\Models\generalSettings;
class HomeController extends Controller
{
	public function __construct(Request $request){
        parent::__construct($request);


    }


	public function index()
	{
		$data['view'] = 'front.index';
        $data['sliders'] =_arefy(Sliders::where('status','!=','trashed')->get());
		return view('front_home',$data);
	}

	//********* aBOUT US********
    public function aboutUs(){
        $data['view']='front.about-us';
        return view('front_home',$data);
    }
	//********* Courses Section********
    public function courses()
    {
    	$data['view'] ='front.course';
    	return view('front_home', $data);
    	
    }
    //********* Contact Section********
    public function contact()
    {
    	$data['view'] ='front.contact';
    	return view('front_home', $data);
    	
    }
}
