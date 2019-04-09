<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RegisterPopup;
use Illuminate\Support\Facades\Validator;
use Validations\Validate as Validations;


class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {
        $data['scholarship'] = _arefy(RegisterPopup::where('type',$type)->get());
        $data['view'] = 'admin.scholarship.list';
        return view('admin.home', $data);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['view'] = 'admin.scholarship.add';
        return view('admin.home', $data);        

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
        $validator  = $validation->addScholarship();
        if ($validator->fails())
        {
            $this->message = $validator->errors();
        }
        else
        {
          $scholarship = new RegisterPopup();
          $scholarship->fill($request->all());
          $scholarship->save();

            $this->status   = true;
            $this->modal    = true;
            $this->alert    = true;
            $this->message  = "Scholarship has been Added successfully.";
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
        $data['view'] = 'admin.scholarship.edit';
          $id = ___decrypt($id);
        $data['scholarships'] = _arefy(RegisterPopup::where('id',$id)->first());
 
        return view('admin.home', $data);        

 
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
         $validator = $validation->addScholarship('edit');
        if($validator->fails()){
           $this->message =$validator ->errors();     
        }
        else
        {
            $scholarships= RegisterPopup::findOrFail($id);
            $data = $request->all();

         
            $scholarships->update($data);
            $this->status =true;
            $this->modal =true;
            $this->alert =true;
            $this->message ="Scholarship has been updated successfully ";
            $this->redirect = url('/admin/scholarship');
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
}
