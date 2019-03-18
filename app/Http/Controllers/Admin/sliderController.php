<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sliders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Validations\Validate as Validations;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    public function index(Request $request){
        $data['view'] = 'admin.sliders.list';
        $data['sliders']  = _arefy(Sliders::where('status','!=','trashed')->get());
        return view('admin.home')->with($data);
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $data['view'] ='/admin/sliders/add';
        return view('admin/home', $data);
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
        $validator  = $validation->addSlider();
        if ($validator->fails())
        {
            $this->message = $validator->errors();
        }
        else
        {
            $slider = new Sliders();
            $slider->fill($request->all());

            if ($file = $request->file('image')){
                $photo_name = time().$request->file('image')->getClientOriginalName();
                $file->move('assets/img/Slider',$photo_name);
                $slider['image'] = $photo_name;
            }
            $slider->save();

            $this->status   = true;
            $this->modal    = true;
            $this->alert    = true;
            $this->message  = "Slider has been Added successfully.";
            $this->redirect = url('admin/sliders');
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
        $data['view'] = 'admin.sliders.edit';
        $id = ___decrypt($id);
        $data['slider'] = _arefy(Sliders::where('id',$id)->first());
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
         $validator = $validation->addSlider('edit');
        if($validator->fails()){
           $this->message =$validator ->errors();     
        }
        else
        {
            $slider= Sliders::findOrFail($id);
            $data = $request->all();

            if($file =$request ->file('image'))
            {
                $photo_name =str_random(3).$request->file('image')->getClientOriginalName();
                $file->move('assets/img/Sliders',$photo_name);
                $data['image']=$photo_name;
            }
            $slider->update($data);
            $this->status =true;
            $this->modal =true;
            $this->alert =true;
            $this->message ="Slider has been updated successfully ";
            $this->redirect = url('/admin/sliders');
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

    public function deleteSlider(Request $request,$id)
    {
       // pp($id);
        $isUpdated               = Sliders::where('id',___decrypt($id))->delete();

        if($isUpdated){           
            $this->message = 'Deleted Slider successfully.';
            $this->status = true;
            $this->redirect = true;
            $this->jsondata = [];
        }
        return $this->populateresponse();
    }
}
