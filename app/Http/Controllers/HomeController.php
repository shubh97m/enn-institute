<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Models\Sliders;
use App\Models\Contact;
use App\Models\Callback;
use App\Models\MainCourses;
use App\Models\SubCourses;
use App\Models\OurPartners;
use App\Models\AskDemo;
use App\Models\GalleryCategory;
use App\Models\Gallery;
use App\Models\Settings;
use App\Models\Subscription;
use App\Models\ChildCourses;
use App\Models\StaticPages;
use Validations\Validate as Validations;
use App\Models\generalSettings;
use App\Models\Testimonial;
use App\Models\RegisterPopup;

class HomeController extends Controller
{
	public function __construct(Request $request){
        parent::__construct($request);
    }


	public function index()
	{
		$data['view'] = 'front.index';

        $data['sliders']          =     _arefy(Sliders::where('status','!=','trashed')->get());
        $data['partner']          =     _arefy(OurPartners::where('status','!=','trashed')->get());
        $data['gallery_category'] =     _arefy(GalleryCategory::gallery_list('array'));
        $data['gallery']          =     _arefy(Gallery::list('array'));
        $data['course']           =     _arefy(MainCourses::where('status','=','active')->get());
        $data['gallery']          =     _arefy(Gallery::list('array'));
        $data['course']           =     _arefy(MainCourses::where('status','=','active')->get());
        $data['testimonial']      =     _arefy(Testimonial::get());
        $data['total_courses']    =      MainCourses::list('count')+SubCourses::list('count')+ChildCourses::list('count');
        $data['scholarship']      =     _arefy(RegisterPopup::get());
        $data['generalsettings']  =     _arefy(generalSettings::get());
        $data['static']           =     _arefy(StaticPages::get());
		return view('front_home',$data);
	}
    //********* ********
    public function askDemo()
    {
      $data['view']='front.askDemo';
      $data['course']   =  _arefy(MainCourses::where('status','=','active')->get());
        return view('front_home',$data);
    }
    public function offered_course()
    {
      $data['view']='front.offered-course';
      $data['course'] = _arefy(MainCourses::where('status','=','active')->where('offered','=','yes')->get());
        return view('front_home',$data);
    }

    public function askDemoStore(Request $request)
    {
     $validation = new Validations($request);
        $validator  = $validation->askDemo();
        if ($validator->fails()){
            $this->message = $validator->errors();
        }else{
            $data = new AskDemo();

            $data->fill($request->all());
            $data->save();
              $this->status   = true;
              $this->modal    = true;
              $this->alert    = true;
              $this->message  = "Thank you, our team will respond you as soon as possible.";
              $this->redirect = url('/');
        } 
      return $this->populateresponse();
    
    }
 
	//********* aBOUT US********
    public function aboutUs(){
        $data['view']='front.about-us';
        $data['static']           =     _arefy(StaticPages::get());
        return view('front_home',$data);
    }
	//********* Courses Section********
    public function courses()
    {
        $data['course']      =  _arefy(MainCourses::where('status','=','active')->get());
    	$data['view'] ='front.course';
    	return view('front_home', $data);
    	
    }
    public function search(Request $request)
    {
        $data['course']   =  _arefy(MainCourses::where('status','=','active')->where('name','like', '%' .$request->search. '%')->get());
        $data['search']=$request->search;
        $data['view'] ='front.search';
        return view('front_home', $data);
        
    }

    public function subscribe(Request $request)
    {   
        $validation = new Validations($request);
        $validator  = $validation->subscribe();
        if ($validator->fails()){
            $this->message = $validator->errors();
        }else{
            
            $data['email']           =  $request->email;
            $data['created_at']      =  date('Y-m-d H:i:s');
            $data['updated_at']      =   date('Y-m-d H:i:s');

            $inser = Subscription::updateOrCreate([
                    'email' =>  $request->email
                ],$data);
     
           
              $this->status   = true;
              $this->modal    = true;
              $this->alert    = true;
              $this->message  = "Thanks for Subscribing";
              $this->redirect = true;
        } 
        return $this->populateresponse();
        
    }

    public function callBack(Request $request)
    {
        $validation = new Validations($request);
        $validator  = $validation->callback();
        if ($validator->fails()){
            $this->message = $validator->errors();
        }else{
            $data = new Callback();

            $data->fill($request->all());

            $data->save();
              $this->status   = true;
              $this->modal    = true;
              $this->alert    = true;
              $this->message  = "Thank you, our team will respond you as soon as possible.";
              $this->redirect = url('/');
        } 
      return $this->populateresponse();
    
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

    public function view_course()
    {
        
        $data['view'] = 'front.course-description';
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
        $data['settings'] = generalSettings::where('id',1)->get()->first();
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

            $to = 'rajat.igniterpro@gmail.com';
            $subject = 'Regarding Customer Contact';
            $message = "You have got a contact mail from " .$data['first_name']. ' ' .$data['last_name']. " whose E-mail-id is " . $data['email'].".You can Contact him regarding any of their query. -Enn Institutes.";

            $headers = "From: test@gmail.com\n";
            $headers .= "MIME-Version: 1.0\n";

            mail($to,$subject,$message,$headers);

            $this->status   = true;
            $this->modal    = true;
            $this->alert    = true;
            $this->message  = "ThankYou For Contacting us!!!.We will contact you as soon as possible.";
            $this->redirect = url('/');
        } 
      return $this->populateresponse();
    }
    public function Register(Request $request){
        $validation = new Validations($request);
        $validator  = $validation->Register();
        if ($validator->fails()){
            $this->message = $validator->errors();
        }else{
            $data = new RegisterPopup();
            $data->fill($request->all());
            $data->save();
              $this->status   = true;
              $this->modal    = true;
              $this->alert    = true;
              $this->message  = "Thanks For Rgister.We will contact you as soon as possible.";
              $this->redirect = url('/');
        } 
      return $this->populateresponse();
    }
}
