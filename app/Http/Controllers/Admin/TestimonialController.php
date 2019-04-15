<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use App\Models\Callback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Validations\Validate as Validations;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Facades\Excel;

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
        $data['view'] = 'admin.testimonial.testimonialsection';
        $data['testimonials'] = _arefy(Testimonial::all());
        return view('admin.home',$data);
    }

    public function callBackList()
    {
        $data['view'] = 'admin.callbacklist';
        $data['callback'] = _arefy(Callback::all());
        // dd($data['callback']);
        return view('admin.home',$data);
    }

    public function exportcallBack(Request $request){
        $callback  = _arefy(Callback::where('status','!=','trashed')->get());
        // dd($agent);
        $type='xlsx';
        $excel_name='callback_data';
        Excel::create($excel_name, function($excel) use ($callback) {
                $excel->sheet('mySheet', function($sheet) use ($callback){
                    $headings = [
                        'Name',
                        'E-mail',
                        'Contact',
                        'Course',
                        'Message',
                    ];

                    $sheet->row(1, $headings);
                    $sheet->cell('A1:I1', function($cell) {
                        $cell->setFontWeight('bold');
                    });
                    $total=count($callback)+1;
                    $sheet->setBorder('A1:I'.$total, 'thin');

                    $i=2;
                    $j=1;
                    foreach ($callback as $key => $value) {
                        if($value){
                            
            
                            $sheet->row($i,[
                                ucfirst($value['name']),
                                $value['email'],
                                $value['mobile'],
                                $value['courses'],
                                $value['message'],
                            ]);
                        }
                        $i++;
                        $j++;
                    }
                });
            })->download($type);
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
        $data['view'] = 'admin.testimonial.testimonialedit';
        $data['testimonial'] = Testimonial::findOrFail(___decrypt($id));
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
