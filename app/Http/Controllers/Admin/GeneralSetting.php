<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\generalSettings;
use Validations\Validate as Validations;

class GeneralSetting extends Controller
{
	public function __construct(Request $request)
	{
	  parent::__construct($request);
	}

	public function settings()
	{
		$data['view'] ='admin.general.generalSettings';
	    $id = 1;
        $data['settings'] = _arefy(generalSettings::where('id',$id)->first());
                  // pp($data['settings']);
        $data['social_sites']= json_decode($data['settings']['social_sites']);
        // dd($data['social_sites']['facebook']);
        return view('admin.home',$data);

	}
	public function changeSetting(Request $request)
	{
        $validation = new Validations($request);
        $validator  = $validation->addSetting();
        if ($validator->fails())
        {
            $this->message = $validator->errors();
        }
        else
        {
        $data['phone']        =!empty($request->phone)?$request->phone:'';
        $data['phone2']       =!empty($request->phone2)?$request->phone2:'';
        $data['skype_number'] =!empty($request->skype_number)?$request->skype_number:'';
        $data['email']        =!empty($request->email)?$request->email:'';
        $data['address']      =!empty($request->address)?$request->address:'';
        $data['skype_number'] =!empty($request->skype_number)?$request->skype_number:'';
        
        $data['social_sites'] = json_encode(array('facebook' =>$request->facebook_url,
                                                  'linkdin'  =>$request->linkdin_url ,
                                                  'twitter'  =>$request->twitter_url));

        $inserId = generalSettings::where('id',1)->update($data);                
            $this->status     = true;
            $this->modal      = true;
            $this->alert      = true;
            $this->message    = "Setting has updated successfully.";
            $this->redirect   = url('admin/general-settings'); 
        }      

        return $this->populateresponse();

     }
}
