<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Trainings;
use App\Models\MainCourses;
use Illuminate\Support\Facades\Validator;
use Validations\Validate as Validations;


class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $data['view'] ='admin.trainings.list';
            $where = 'status != "trashed"';
           $data['training']  = _arefy(Trainings::list('array',$where));
           // dd($data['training']);
          return view('admin.home')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['view'] ='admin.trainings.add';
        $data['course']     =  _arefy(MainCourses::where('status','!=','trashed')->get());
        return view('/admin/home',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validation = new Validations($request);
        $validator  = $validation->addTrainings();
        if ($validator->fails())
        {
            $this->message = $validator->errors();
        }
        else
        {
          $training = new Trainings();
            $training->fill($request->all());
            $training->save();

            $this->status   = true;
            $this->modal    = true;
            $this->alert    = true;
            $this->message  = "Trainings catagory has been Added successfully.";
            $this->redirect = url('admin/home');
        }
        return $this->populateresponse();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data['view'] = 'admin.trainings.edit';
        $id = ___decrypt($id);
        $data['course']     =  _arefy(MainCourses::where('status','!=','trashed')->get());
        $data['trainings'] =  _arefy(Trainings::where('id','=',$id)->where('status','!=','trashed')->first());
        return view('admin.home',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
      {
        $id = ___decrypt($id);
        $validation = new Validations($request);
        $validator  = $validation->addTrainings('add');
        if ($validator->fails()) {
            $this->message = $validator->errors();
        }else{
        $trainings = Trainings::findOrFail($id);
        $data = $request->all();
        // if ($file = $request->file('image'))
        // {
        //   $photo_name = time().$request->file('image')->getClientOriginalName();
        //   $file->move('assets/img/Trainings',$photo_name);
        //   $data['image'] = $photo_name;
        // }
         
        $trainings->update($data);
            $this->status   = true;
            $this->modal    = true;
            $this->alert    = true;
            $this->message  = "Trainings has been Updated successfully.";
            $this->redirect = url('admin/home');
        }
        return $this->populateresponse();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function deleteTraining(Request $request,$id)
    {
      $isUpdated       = Trainings::where('id',___decrypt($id))->delete();
        if($isUpdated){           
            $this->message  = 'Trainings has been deleted successfully.';
            $this->status   = true;
            $this->redirect = true;
            $this->jsondata = [];
        }
        return $this->populateresponse();    }
}
