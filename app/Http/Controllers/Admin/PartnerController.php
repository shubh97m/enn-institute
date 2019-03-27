<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OurPartners;

use Validations\Validate as Validations;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['view'] ='admin.partner.list';
       $data['partner']  = _arefy(OurPartners::where('status','!=','trashed')->get());
       return view('admin.home')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
     $data['view'] ='/admin/partner/add';
        return view('admin/home', $data);
    }

     public function store(Request $request)
    {
         $validation = new Validations($request);
        $validator  = $validation->addPartner();
        if ($validator->fails())
        {
            $this->message = $validator->errors();
        }
        else
        {
            $partner = new OurPartners();
            $partner->fill($request->all());

            if ($file = $request->file('image')){
                $photo_name = time().$request->file('image')->getClientOriginalName();
                $file->move('assets/img/Partners',$photo_name);
                $partner['image'] = $photo_name;
            }
            $partner->save();

            $this->status   = true;
            $this->modal    = true;
            $this->alert    = true;
            $this->message  = "Partners has been Added successfully.";
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
     $data['view'] = '/admin/partner/edit';
    $id = ___decrypt($id);
    $data['partner'] = _arefy(OurPartners::where('id',$id)->first());
       return view('admin.home',$data);
                   
    }

  
    public function update(Request $request, $id)
    {
         $id = ___decrypt($id);
        $validation = new Validations($request);
         $validator = $validation->addPartner('edit');
        if($validator->fails()){
           $this->message =$validator ->errors();     
        }
        else
        {
            $partner= OurPartners::findOrFail($id);
            $data = $request->all();

            if($file =$request ->file('image'))
            {
                $photo_name =str_random(3).$request->file('image')->getClientOriginalName();
                $file->move('assets/img/Partners',$photo_name);
                $data['image']=$photo_name;
            }
            $partner->update($data);
            $this->status =true;
            $this->modal =true;
            $this->alert =true;
            $this->message ="Partner has been updated successfully ";
            $this->redirect = url('/admin/our-partners');
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
        
    }
    public function deletePartner(Request $request,$id)
    {
        $isUpdated          = OurPartners::where('id',___decrypt($id))->delete();
        if($isUpdated){           
            $this->message  = 'Course has been deleted successfully.';
            $this->status   = true;
            $this->redirect = true;
            $this->jsondata = [];
        }
        return $this->populateresponse();
    }

}
