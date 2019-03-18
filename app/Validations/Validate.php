<?php

namespace Validations;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
/**
* 
*/
class Validate
{
  protected $data;
  public function __construct($data){
    $this->data = $data;
  }

  private function validation($key){
    $validation = [
      'id'                => ['required'],
      'email'             => ['nullable','email'],
      'req_email'         => ['required','email'],
      'first_name'        => ['required','string'],
      'name'              => ['required','string'],
      'last_name'         => ['nullable','string'],
      'phone_code'        => ['nullable','required_with:mobile_number','string'],
      'mobile_number'     => ['required','numeric'],
      'req_mobile_number' => ['required','required_with:phone_code','numeric'],
      'country'           => ['required','string'],
      'address'           => ['nullable','string','max:1500'],
      'description'       => ['required','string','max:1500'],
      'key_points'        => ['required','string','max:1500'],
      'title'             => ['required','string'],
      'profile_picture'   => ['required','mimes:doc,docx,pdf'],
      'pin_code'      => ['nullable','max:6','min:4'],
      'type'              => ['required','string'],
      'phone'           => ['required','numeric','digits:10'],
      'location'          => ['required','string'],
      'password'          => ['required','string','max:50','min:6'],
      'photo'       => ['required','mimes:jpg,jpeg,png'],
      'photomimes'    => ['nullable','mimes:jpg,jpeg,png'],
      'photo_null'    => ['nullable'],
      'slug_no_space'   => ['required','alpha_dash','max:255'],
      'password_check'  => ['required'],
      'newpassword'   => ['required','max:10'],
           'password_null'   => ['nullable']
    ];
    return $validation[$key];
  }

  public function login(){
        $validations = [
            'email'              => $this->validation('req_email'),
      'password'           => $this->validation('password'),
          ];
        $validator = \Validator::make($this->data->all(), $validations,[
            'email.required'     => 'E-mail is required.',
            'password.required'  => 'Password is required.',
        ]);
        return $validator;    
  }
  public function addSlider($action='add')
  {
    $validations = [
      'image'        => $this->validation('photo'),
      'text'         => $this->validation('name'),
    ];
      if($action == 'edit')
      {
        $validations['image']   = $this->validation('photo_null');
      } 
        $validator = \Validator::make($this->data->all(), $validations,[
          'image.required'      => 'Slider Image is required.',
          'image.mimes'         => 'Slider Should be in .jpg,.jpeg,.png format.',
          'text.required'       => 'Slider Title is required.',
        ]);
        return $validator;
      }

   public function addSetting($action= 'add')
      {
        $validations = [
          'phone'       =>$this->validation('phone'),
          'email'       =>$this->validation('email'),
          'address'     =>$this->validation('address')
          ];

         $validator = \Validator::make($this->data->all(), $validations,[
          'phone.required'       => 'Phone is required.',
          'phone.numeric'        => 'Phone should be in numeric format.',
          'email.required'       => 'Email is required.',
          'address.required'     => 'Address is Required.',
          ]);
          return $validator;            
      }   
        
}

