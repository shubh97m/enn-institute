<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\AskDemo;
use App\Models\StaticPages;
use App\Models\Subscription;
use Illuminate\Support\Facades\Validator;
use Validations\Validate as Validations;

class StaticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
     public function contact(Request $request)
    {
        $data['view'] = 'admin.contact.list';
        $data['contact']  = _arefy(Contact::where('status','!=','trashed')->orderBy('id','desc')->get());
        return view('admin.home')->with($data);
    }

    public function demo(Request $request)
    {
        $data['view'] = 'admin.contact.demo';
        $data['contact']  = _arefy(AskDemo::where('status','!=','trashed')->orderBy('id','desc')->get());
        return view('admin.home')->with($data);
    }

    public function staticpageList(Request $request){
        $data['view'] = 'admin.staticpages.list';
        $data['staticpages'] = _arefy(StaticPages::where('status','!=','trashed')->get());
        return view('admin.home')->with($data);
    }
    public function subscriberList(Request $request){
        $data['view'] = 'admin.contact.subscriberlist';
        $data['subscription'] = _arefy(Subscription::where('status','!=','trashed')->get());
        return view('admin.home')->with($data);
    }

    public function editStaticPage(Request $request,$id){
        $data['view'] = 'admin.staticpages.edit';
        $id = ___decrypt($id);
        $data['staticpage'] = _arefy(StaticPages::where('id',$id)->first());
        // dd($data['staticpage']);
        return view('admin.home')->with($data);
    }

    public function staticpageUpdate(Request $request, $id)
    {
        $id = ___decrypt($id);
        $validation = new Validations($request);
        $validator  = $validation->createstaticpage('edit');
        if ($validator->fails()) {
            $this->message = $validator->errors();
        }else{
            $staticpage = StaticPages::findOrFail($id);
            // dd($request->all());
            $input = $request->all();

            if ($file = $request->file('image')){
                $photo_name = time().$request->file('image')->getClientOriginalName();
                $file->move('assets/img/staticpage',$photo_name);
                $input['image'] = $photo_name;
            }

            $staticpage->update($input);

            $this->status   = true;
            $this->modal    = true;
            $this->alert    = true;
            $this->message  = "Static Page has been Updated successfully.";
            $this->redirect = url('admin/staticpages');
        }
        return $this->populateresponse();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
