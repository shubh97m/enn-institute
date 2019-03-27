<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Models\Sliders;
use App\Models\Contact;
use App\Models\MainCourses;
use App\Models\SubCourses;
use App\Models\OurPartners;
use App\Models\ChildCourses;
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
        $data['sliders']        =_arefy(Sliders::where('status','!=','
                                    trashed')->get());
       $data['partner']         = _arefy(OurPartners::where('status','!=','
                                    trashed')->get()); 
        $data['course']         =  _arefy(MainCourses::where('status','=','
                                    active')->get());
        $data['total_courses']  =  MainCourses::list('count')+SubCourses::list('count')+ChildCourses::list('count');

		return view('front_home',$data);
	}
    //********* ********
public function askDemo()
{
    $data['view']='front.askDemo';
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
        $data['course']      =  _arefy(MainCourses::where('status','=','active')->get());
    	$data['view'] ='front.course';
    	return view('front_home', $data);
    	
    }
    public function courseView(Request $request,$id )
    {
        $id = ___decrypt($id);
        $data['view'] = 'front.course_view';
        $where = 'course_id='.$id;
        $data['sub_course']    =  _arefy(SubCourses::list('array',$where));
        $wherenot = 'id != '.$id;
        $data['related_courses']    =  _arefy(MainCourses::list('array',$wherenot));
        $data['course']      =  _arefy(MainCourses::where('id','=',$id)->first());

        return view('front_home',$data);
    }

    public function sub_courses(Request $request,$id )
    {
        $id = ___decrypt($id);
        $data['view'] = 'front.sub_course';
        $where = 'course_id='.$id;
        $data['sub_course']    =  _arefy(SubCourses::list('array',$where));
        $data['course']      =  _arefy(MainCourses::where('id','=',$id)->first());
        return view('front_home',$data);
    }

    //********* Contact Section********
    public function contact()
    {
    	$data['view'] ='front.contact';
    	return view('front_home', $data);
    	
    }
    public function contactStore(Request $request){
        $validation = new Validations($request);
        $validator  = $validation->contact();
        if ($validator->fails()){
            $this->message = $validator->errors();
        }else{
            $data = new Contact();
            $data->fill($request->all());
            $data->save();
              $this->status   = true;
              $this->modal    = true;
              $this->alert    = true;
              $this->message  = "Thanks For Conatcting us.We will contact you as soon as possible.";
              $this->redirect = url('contact');
        } 
      return $this->populateresponse();
    }
}
