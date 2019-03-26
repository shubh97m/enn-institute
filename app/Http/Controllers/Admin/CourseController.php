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
        $where = 'status != "trashed"';
        $data['subcourse']  = _arefy(SubCourses::list('array',$where));
       // dd($data['subcourse']);
        $data['childCourse'] =  _arefy(ChildCourses::where('status','!=','trashed')->get());
       
        return view('admin.home')->with($data);
    }
    public function addMainCourses()
    {
        $data['view'] ='/admin.courses.main-courses.add';
        return view('admin/home', $data);
    }

//Edit main courses add page view
public function mainCourseEdit(Request $request,$id)
    {
        $data['view'] = 'admin.courses.main-courses.edit';
        $id = ___decrypt($id);
        $data['courses'] = _arefy(MainCourses::where('id',$id)->first());
        // dd($data['tax']);
        return view('admin.home',$data);
    }
//Edit main courses add page view
 public function maincourseUpdate(Request $request, $id)
    {   
        $id = ___decrypt($id);
        $validation = new Validations($request);
        $validator  = $validation->addMain();
        if ($validator->fails()) {
            $this->message = $validator->errors();
        }else
        {
          $data = MainCourses::findOrFail($id);
          $input = $request->all();
          
        if ($file = $request->file('image'))
        {
          $photo_name = time().$request->file('image')->getClientOriginalName();
          $file->move('assets/img/Courses',$photo_name);
          $input['image'] = $photo_name;
        }
            $data->update($input);

            $this->status   = true;
            $this->modal    = true;
            $this->alert    = true;
            $this->message  = "Course has been Updated successfully.";
            $this->redirect = url('admin/list-courses');
        }
            return $this->populateresponse();
    }

//sub courses add page view
    public function addSubCourses()
        {
            $data['view'] ='/admin.courses.sub-courses.add';
            $data['maincourse'] = _arefy(MainCourses::where('status','!=','trashed')->get());
            // dd($data['maincourse']);
            return view('admin/home', $data);
        }
//Edit Sub courses add page view
public function subCourseEdit(Request $request,$id)
    {
        $id = ___decrypt($id);
        $data['view'] = 'admin.courses.sub-courses.edit';
        $data['course']      = _arefy(MainCourses::where('status','!=','trashed')->get());
        $data['subcourses']  = _arefy(SubCourses::where('id',$id)->first());
        return view('admin.home',$data);
    }
//Edit sub courses add page view
public function subcourseUpdate(Request $request, $id)
    {   
        $id = ___decrypt($id);
        $validation = new Validations($request);
        $validator  = $validation->addSub();
        if ($validator->fails()) {
            $this->message = $validator->errors();
        }else
        {
          $data = SubCourses::findOrFail($id);
          $input = $request->all();
          
        if ($file = $request->file('image'))
        {
          $photo_name = time().$request->file('image')->getClientOriginalName();
          $file->move('assets/img/Courses',$photo_name);
          $input['image'] = $photo_name;
        }
            $data->update($input);

            $this->status   = true;
            $this->modal    = true;
            $this->alert    = true;
            $this->message  = "Course has been Updated successfully.";
            $this->redirect = url('admin/list-courses');
        }
            return $this->populateresponse();
    }


    //child courses add page view
    public function addChildCourses()
    {
        $data['view'] ='/admin.courses.child-course.add';
        $data['maincourse'] = _arefy(MainCourses::where('status','!=','trashed')->get());
        return view('admin/home', $data);
    }
    public function childcourseEdit(Request $request,$id)
    {
        $id =___decrypt($id);
        $data['view'] ='/admin.courses.child-course.edit';
        $data['maincourse'] = _arefy(MainCourses::where('status','!=','trashed')->get());
         $data['childcourses']  = _arefy(ChildCourses::where('id',$id)->first());
        return view('admin/home', $data);
    }
    public function ajax_sub_course_list(Request $request)
    {
        $data['subcourse'] = _arefy(SubCourses::where('course_id',$request->id)->where('status','!=','trashed')->get());
        return view('admin.courses.ajaxsubcat', $data);
    }
    //Main courses add functionality
    public function addMain(Request $request)
    {
        $validation = new Validations($request);
        $validator  = $validation->addMain();
        if ($validator->fails()){
            $this->message = $validator->errors();
        }
        else{
            $data = new MainCourses();
            $data->fill($request->all());
           
            if ($file = $request->file('image')){
                $photo_name = time().$request->file('image')->getClientOriginalName();
                $file->move('assets/img/Courses',$photo_name);
                $data['image'] = $photo_name;
            }            
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
            $data = new SubCourses();
            $data->fill($request->all());

            if ($file = $request->file('image')){
              $photo_name = time().$request->file('image')->getClientOriginalName();
              $file->move('assets/img/Courses',$photo_name);
              $data['image'] = $photo_name;
            }                  
            $data->save();

              $this->status   = true;
              $this->modal    = true;
              $this->alert    = true;
              $this->message  = "Sub Course has been Added successfully.";
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
            $data = new ChildCourses();
            $data->fill($request->all());
            if ($file = $request->file('image')){
              $photo_name = time().$request->file('image')->getClientOriginalName();
              $file->move('assets/img/Courses',$photo_name);
              $data['image'] = $photo_name;
            } 
            $data->save();
              $this->status   = true;
              $this->modal    = true;
              $this->alert    = true;
              $this->message  = "Child Course has been Added successfully.";
              $this->redirect = url('admin/list-courses');
        } 
      return $this->populateresponse();
    }

    public function childCourseUpdate(Request $request, $id)
    {   
        $id = ___decrypt($id);
        $validation = new Validations($request);
        $validator  = $validation->addSub();
        if ($validator->fails()) {
            $this->message = $validator->errors();
        }else
        {
          $data = ChildCourses::findOrFail($id);
          $input = $request->all();
          
        if ($file = $request->file('image'))
        {
          $photo_name = time().$request->file('image')->getClientOriginalName();
          $file->move('assets/img/Courses',$photo_name);
          $input['image'] = $photo_name;
        }
            $data->update($input);

            $this->status   = true;
            $this->modal    = true;
            $this->alert    = true;
            $this->message  = "Child Course has been Updated successfully.";
            $this->redirect = url('admin/list-courses');
        }
            return $this->populateresponse();
    }

//main course delete functionality
    public function deleteMainCourses(Request $request,$id)
    {
        $isUpdated          = MainCourses::where('id',___decrypt($id))->delete();
        if($isUpdated){           
            $this->message  = 'Course has been deleted successfully.';
            $this->status   = true;
            $this->redirect = true;
            $this->jsondata = [];
        }
        return $this->populateresponse();
    }
//Sub course delete functionality
    public function deleteSubCourses(Request $request,$id)
    {
        $isUpdated          = SubCourses::where('id',___decrypt($id))->delete();
        if($isUpdated){           
            $this->message  = 'Course has been deleted  successfully.';
            $this->status   = true;
            $this->redirect = true;
            $this->jsondata = [];
        }
        return $this->populateresponse();
    } 
}
