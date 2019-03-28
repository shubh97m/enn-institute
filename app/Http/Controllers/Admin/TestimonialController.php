<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Validations\Validate as Validations;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Controllers\Controller;
class TestimonialController extends Controller
{

    public function __construct(Request $request)
    {   
        parent::__construct($request);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['testimonials'] = _arefy(Testimonial::all());
        $data['view'] = 'admin.testimonial.testimonialsection';
        return view('admin.home',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['view'] = 'admin.testimonial.testimonialadd';
        return view('admin.home',$data);
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
        $validator  = $validation->addtestimonial();
        if ($validator->fails()) {
            $this->message = $validator->errors();
        }else{
        $testimonial = new Testimonial;
        $testimonial->fill($request->all());
       
        if ($file = $request->file('image'))
        {
          $photo_name = time().$request->file('image')->getClientOriginalName();
          $file->move('assets/img/testimonial',$photo_name);
          $testimonial['image'] = $photo_name;
        }
        $testimonial->save();
            $this->status   = true;
            $this->modal    = true;
            $this->alert    = true;
            $this->message  = "Testimonial has been Added successfully.";
            $this->redirect = url('admin/testimonial');
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
        $data['testimonial'] = Testimonial::findOrFail(___decrypt($id));
        $data['view'] = 'admin.testimonial.testimonialedit';
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
        $validation = new Validations($request);
        $validator  = $validation->addtestimonial('edit');
        if ($validator->fails()) {
            $this->message = $validator->errors();
        }else{
        $testimonial = Testimonial::findOrFail($id);
        $data = $request->all();
        if ($file = $request->file('image'))
        {
          $photo_name = time().$request->file('image')->getClientOriginalName();
          $file->move('assets/img/testimonial',$photo_name);
          $data['image'] = $photo_name;
        }
         
        $testimonial->update($data);
            $this->status   = true;
            $this->modal    = true;
            $this->alert    = true;
            $this->message  = "Testimonial has been Updated successfully.";
            $this->redirect = url('admin/testimonial');
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
        $testimonial = Testimonial::findOrFail(___decrypt($id));
        $testimonial->delete();
            $this->status   = true;
            $this->modal    = true;
            $this->alert    = true;
            $this->message  = "Testimonial Deleted Successfully.";
            $this->redirect = url('admin/testimonial');
            return $this->populateresponse();
    }
}
