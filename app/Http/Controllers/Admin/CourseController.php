<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MainCourses;
use App\Models\SubCourses;
use App\Models\ChildCourses;
use Illuminate\Support\Facades\Validator;
use Validations\Validate as Validations;


class CourseController extends Controller
{
	public function __construct(Request $request)
	{
		  parent::__construct($request);

	}
	 public function index()
    {
      
        $data['view']        =  'admin.courses.list-courses';
        $data['course']      =  _arefy(MainCourses::where('status','!=','trashed')->get());
        $data['subCourse']   =  _arefy(SubCourses::where('status','!=','trashed')->get());
        $data['childCourse'] =  _arefy(ChildCourses::where('status','!=','trashed')->get());
       
        return view('admin.home')->with($data);
    }
    public function addMainCourses()
    {
        $data['view'] ='/admin.courses.main-courses.add';
        return view('admin/home', $data);
    }
//sub courses add page view
    public function addSubCourses()
        {
            $data['view'] ='/admin.courses.sub-courses.add';
            return view('admin/home', $data);
        }
//child courses add page view
    public function addChildCourses()
        {
            $data['view'] ='/admin.courses.sub-courses.add';
            return view('admin/home', $data);
        }
//Main courses add functionality
    public function addMain(Request $request)
    {
        $validation = new Validations($request);
        $validator  = $validation->addMain();
        if ($validator->fails()){
            $this->message = $validator->errors();
        }else{
            $data = new MainCourses();
            $data->fill($request->all());
            
            $data->save();

              $this->status   = true;
              $this->modal    = true;
              $this->alert    = true;
              $this->message  = "Courses has been Added successfully.";
              $this->redirect = url('admin/list-courses');
        } 
      return $this->populateresponse();
    }
//Sub courses add functionality

     public function addSub(Request $request)
     {
        $validation = new Validations($request);
        $validator  = $validation->addSub();
        if ($validator->fails()){
            $this->message = $validator->errors();
        }else{
            $data = new MainCourses();
            $data->fill($request->all());
            
            $data->save();

              $this->status   = true;
              $this->modal    = true;
              $this->alert    = true;
              $this->message  = "Courses has been Added successfully.";
              $this->redirect = url('admin/list-courses');
        } 
       return $this->populateresponse();
     }
//Child courses add functionality
  
    public function addChild(Request $request)
    {
        $validation = new Validations($request);
        $validator  = $validation->addChild();
        if ($validator->fails()){
            $this->message = $validator->errors();
        }else{
            $data = new MainCourses();
            $data->fill($request->all());
            
            $data->save();

              $this->status   = true;
              $this->modal    = true;
              $this->alert    = true;
              $this->message  = "Courses has been Added successfully.";
              $this->redirect = url('admin/list-courses');
        } 
      return $this->populateresponse();
    }


    public function deleteMainCourses(Request $request,$id)
    {
       // pp($id);
        $isUpdated          = MainCourses::where('id',___decrypt($id))->delete();

        if($isUpdated){           
            $this->message  = 'Deleted Slider successfully.';
            $this->status   = true;
            $this->redirect = true;
            $this->jsondata = [];
        }
        return $this->populateresponse();
    }
}
