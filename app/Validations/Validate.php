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
      'phone2'            => ['nullable', 'numeric'],
      'mobile_number'     => ['required','numeric'],
      'req_mobile_number' => ['required','required_with:phone_code','numeric'],
      'country'           => ['required','string'],
      'address'           => ['nullable','string','max:1500'],
      'description'       => ['required','string','max:1500'],
      'key_points'        => ['required','string','max:1500'],
      'title'             => ['required','string'],
      'profile_picture'   => ['required','mimes:doc,docx,pdf'],
      'pin_code'          => ['nullable','max:6','min:4'],
      'type'              => ['required','string'],
      'phone'             => ['required','numeric','digits:10'],
      'location'          => ['required','string'],
      'password'          => ['required','string','max:50','min:6'],
      'photo'             => ['required','mimes:jpg,jpeg,png'],
      'course_img'        => ['mimes:jpg,jpeg,png'],
      'photomimes'        => ['nullable','mimes:jpg,jpeg,png'],
      'photo_null'        => ['nullable'],
      'slug_no_space'     => ['required','alpha_dash','max:255'],
      'password_check'    => ['required'],
      'newpassword'       => ['required','max:10'],
      'password_null'     => ['nullable'],
      'review'            => ['required','string','max:300'],
      'client'            => ['required','string'],
      'designation'       => ['required','string'],
      
    ];
    return $validation[$key];
  }

  public function login(){
        $validations = [
      'email'                    => $this->validation('req_email'),
      'password'                 => $this->validation('password'),
          ];
        $validator = \Validator::make($this->data->all(), $validations,[
            'email.required'     => 'E-mail is required.',
            'password.required'  => 'Password is required.',
        ]);
        return $validator;    
  }

  public function subscribe(){
        $validations = [
      'email'                    => $this->validation('req_email'),
  
          ];
        $validator = \Validator::make($this->data->all(), $validations,[
            'email.required'     => 'E-mail is required.',
         
        ]);
        return $validator;    
  }
  
  
  public function addGalleryCategory(){
        $validations = [
      'name'                    => $this->validation('name'),
     
          ];
        $validator = \Validator::make($this->data->all(), $validations,[]);
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
          'phone2'       =>$this->validation('phone2'),
          'email'       =>$this->validation('email'),
          'address'     =>$this->validation('address'),
          'logo'        => $this->validation('photo'),
          ];

         $validator = \Validator::make($this->data->all(), $validations,[
          'phone.required'       => 'Phone is required.',
          'phone.numeric'        => 'Phone should be in numeric format.',
          'phone2.numeric'       => 'Phone should be in numeric',
          'email.required'       => 'Email is required.',
          'address.required'     => 'Address is Required.',
          ]);
          return $validator;            
      }

      public function addMain($action= 'add')
         {
            $validations = [
          'name'              =>$this->validation('name'),    
          'image'             =>$this->validation('course_img'),
          'description'       =>$this->validation('description'),
          ];

        $validator = \Validator::make($this->data->all(), $validations,[
        'name.required'        => 'Course Name is required.',
        'description.required'       => 'Course description is required ',
        'image.mimes'                => 'Course image should be in .jpg,.jpeg,.png format.',
    
          ]);
          return $validator;     
         }  

      public function addSub($action= 'add')
         {
          $validations = [
          'name'              =>$this->validation('name'),    
          'image'             =>$this->validation('course_img'),
          ];

        $validator = \Validator::make($this->data->all(), $validations,[
        'name.required'        => 'Course Name is required.',
        'image.mimes'           => 'Course image should be in .jpg,.jpeg,.png format.',
    
          ]);
          return $validator;     
         }  

        public function addChild($action= 'add')
        {
          $validations = [
          'course'        =>$this->validation('name'),    
          'sub_course'        =>$this->validation('name'),    
          'name'        =>$this->validation('name'),
          'image' =>$this->validation('course_img'),
          ];

          $validator = \Validator::make($this->data->all(), $validations,[
          'image.mimes'                 => 'Course image should be in .jpg,.jpeg,.png format.',

          ]);
          return $validator;     
        }

       public function addPartner($action='add')
        {
          $validations = [
          'image' =>$this->validation('photo'),
          ];

          $validator = \Validator::make($this->data->all(), $validations,[
          'image.mimes'        => 'Image should be in .jpg,.jpeg,.png format.',
          'image.required'     => 'Image is required '

          ]);
          return $validator;     

        } 

         public function addGallery($action='add')
        {
          $validations = [
           'gallery_category_id' =>$this->validation('id'),
          'title' =>$this->validation('name'),
          'image' =>$this->validation('photo'),
          
          ];
          if($action=='edit'){
            $validations=[];
            $validations = [
               'gallery_category_id' =>$this->validation('id'),
              'title' =>$this->validation('name'),
              'image' =>$this->validation('photomimes'),
              
              ];
          }

          $validator = \Validator::make($this->data->all(), $validations,[
          'image.mimes'        => 'Image should be in .jpg,.jpeg,.png format.',
          'image.required'     => 'Image is required '

          ]);
          return $validator;     

        } 


        public function contact($action= 'add')
        {
          $validations = [
          'first_name'      =>$this->validation('name'),    
          'last_name'       =>$this->validation('name'),    
          'email'           =>$this->validation('name'),
          'subject'         =>$this->validation('name'),
          'message'         =>$this->validation('name'),
          ];

          $validator = \Validator::make($this->data->all(), $validations,[]);
          return $validator;     
        }   
      public function askDemo($action='add')
      {
             $validations = [
          'name'      =>$this->validation('name'),    
          'email'       =>$this->validation('email'),    
          'mobile'         =>$this->validation('phone'),
          
          ];

          $validator = \Validator::make($this->data->all(), $validations,[]);
          return $validator;     
      }

    public function addtestimonial($action='add'){
      $validations = [
          'review'          => $this->validation('review'),
          'client'          => $this->validation('client'),
          'designation'         => $this->validation('designation'),
      ];

      if ($action == 'edit') {
        $validations["review"]    = $this->validation('review');
        $validations["client"]    = $this->validation('name');
        $validations["designation"] = $this->validation('name');
      }

      elseif ($action == 'testimonialsection') {
        $validations = [
            'testimonial_title'     => $this->validation('name'),
            'testimonial_text'      => $this->validation('name'),
        ];
      }

      $validator = \Validator::make($this->data->all(), $validations,[
      'review.required'         =>  'Clients review is required.',
      'client.required'         =>  'Clients Name is required',
      'designation.required'      =>  'Clients Designation is required',
      'testimonial_title.required'  =>  'Testimonial Title is required',
      'testimonial_text.required'   =>  'Testimonial Text is required',
      ]);
      return $validator;
    }

    public function addTrainings($action='add')
    {
       $validations = [
          'training_type'   =>$this->validation('name'),    
          ];

          $validator = \Validator::make($this->data->all(), $validations,[]);
          return $validator;     
        }   
}

