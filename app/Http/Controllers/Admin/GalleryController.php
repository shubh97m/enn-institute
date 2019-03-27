<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GalleryCategory;
use App\Models\Gallery;
use Validations\Validate as Validations;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['view'] ='admin.gallery.list';
       $data['gallery']  = _arefy(Gallery::list('array'));
       return view('admin.home')->with($data);
    }

    public function list()
    {
       $data['view'] ='admin.gallery.category_list';
       $data['gallery_cat']  = _arefy(GalleryCategory::where('status','!=','trashed')->get());
       return view('admin.home')->with($data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
     $data['view'] ='/admin/gallery/add';
       $data['gallery_cat']  = _arefy(GalleryCategory::where('status','!=','trashed')->get());

        return view('admin/home', $data);
    }

    public function addCategory()
    {
     
     $data['view'] ='/admin/gallery/add_category';
        return view('admin/home', $data);
    }

     public function store(Request $request)
    {
         $validation = new Validations($request);
        $validator  = $validation->addGallery();
        if ($validator->fails())
        {
            $this->message = $validator->errors();
        }
        else
        {
            $partner = new Gallery();

            $partner->fill($request->all());
            $request->request->add(['status'=>'active','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')]);
            if ($file = $request->file('image')){
                $photo_name = time().$request->file('image')->getClientOriginalName();
                $file->move('assets/img/gallery',$photo_name);
                $partner['image'] = $photo_name;
            }
            $partner->save();

            $this->status   = true;
            $this->modal    = true;
            $this->alert    = true;
            $this->message  = "Gallery has been Added successfully.";
            $this->redirect = url('admin/gallery');
        }
        return $this->populateresponse();
    }

    public function storeCategory(Request $request)
    {
         $validation = new Validations($request);
        $validator  = $validation->addGalleryCategory();
        if ($validator->fails())
        {
            $this->message = $validator->errors();
        }
        else
        {
            $partner = new GalleryCategory();
            $request->request->add(['status'=>'active','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')]);
            $partner->fill($request->all());

            
            $partner->save();

            $this->status   = true;
            $this->modal    = true;
            $this->alert    = true;
            $this->message  = "Category for Gallery has been Added successfully.";
            $this->redirect = url('admin/gallery-category');
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
     $data['view'] = '/admin/gallery/edit';
    $id = ___decrypt($id);
      $data['gallery_cat']  = _arefy(GalleryCategory::where('status','!=','trashed')->get());
    $data['gallery'] = _arefy(Gallery::where('id',$id)->first());
       return view('admin.home',$data);
                   
    }

     public function editCategory($id)
    {
        $data['view'] = '/admin/gallery/edit_category';
        $id = ___decrypt($id);
        $data['category'] = _arefy(GalleryCategory::where('id',$id)->first());
        return view('admin.home',$data);
                   
    }
     public function updateCategory(Request $request, $id)
    {
      
        $id = ___decrypt($id);
        $validation = new Validations($request);
         $validator = $validation->addGalleryCategory('edit');
        if($validator->fails()){
           $this->message =$validator ->errors();     
        }
        else
        {
            $partner= GalleryCategory::findOrFail($id);
            $data = $request->all();

          
            $partner->update($data);
            $this->status =true;
            $this->modal =true;
            $this->alert =true;
            $this->message ="Gallery Category has been updated successfully ";
            $this->redirect = url('/admin/gallery-category');
        }
         return $this->populateresponse();
    }


  
    public function update(Request $request, $id)
    {
     
        $id = ___decrypt($id);
        $validation = new Validations($request);
         $validator = $validation->addGallery('edit');
        if($validator->fails()){
           $this->message =$validator ->errors();     
        }
        else
        {
            $partner= Gallery::findOrFail($id);
            $data = $request->all();

            if($file =$request ->file('image'))
            {
                $photo_name =str_random(3).$request->file('image')->getClientOriginalName();
                $file->move('assets/img/gallery',$photo_name);
                $data['image']=$photo_name;
            }
            $partner->update($data);
            $this->status =true;
            $this->modal =true;
            $this->alert =true;
            $this->message ="Gallery has been updated successfully ";
            $this->redirect = url('/admin/gallery');
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
