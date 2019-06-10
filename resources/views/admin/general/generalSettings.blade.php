<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">General Settings</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    	    
 	   <form role="edit-settings" method="POST" action="{{url('admin/general-settings')}}">
    	    {{csrf_field()}}
    	    {{-- {{pp($settings)}} --}}
        <div class="col-md-12">
          <div class="form-group">
            <input type="hidden" id="id" name="id" class="form-control" value="{{!empty($settings['id'])?$settings['id']:''}}">
			</div>
		 </div>	  
        <div class="row">  
         <div class="col-md-12">
            <div class="form-group">
              <label>Phone</label>
              <input type="text" name ="phone" class="form-control" 
          		value= "{{!empty($settings['phone'])?$settings['phone']:''}}">
            </div>
          </div>
        </div>
        <div class="row">  
         <div class="col-md-12">
            <div class="form-group">
              <label>Mobile Number</label>
              <input type="text" name ="phone2" class="form-control" 
              value= "{{!empty($settings['phone2'])?$settings['phone2']:''}}">
            </div>
          </div>
        </div>
        <div class="row">  
         <div class="col-md-12">
            <div class="form-group">
              <label>Email</label>
              <input type="text" name ="email" class="form-control"  value=
           "{{!empty($settings['email'])?$settings['email']:''}}">
            </div>
          </div>
        </div>

        <div class="row">  
          <div class="col-md-12">
            <div class="form-group">
              <label>Logo</label>
              <div>
                <input onchange="readURL(this)" id="uploadFile" accept="image/*" name="logo" type="file">
              </div>
              <div>
                @if(!empty($settings['logo']))
                  <img style="max-width: 250px;" src="{{asset('assets/img/'.$settings['logo'])}}" id="adminimg" alt="No Featured Image Added">
                @else
                   <img style="max-width: 250px;" src="{{asset('assets/img/avatar.png')}}" id="adminimg" alt="No Featured Image Added">
                @endif
              </div>
            
            </div>
          </div>
        </div>

      <div class="row">  
         <div class="col-md-12">
            <div class="form-group">
              <label>Facebook Url</label>
           <input type="text" name ="facebook_url" class="form-control"  value="
             {{(!empty($social_sites)?$social_sites->facebook:'')}}">
            </div>
          </div>
        </div>
           <div class="row">  
         <div class="col-md-12">
            <div class="form-group">
              <label>Twitter Url</label>
           <input type="text" name ="twitter_url" class="form-control"  value="
             {{(!empty($social_sites)?$social_sites->twitter:'')}}">
            </div>
          </div>
        </div>
           <div class="row">  
         <div class="col-md-12">
            <div class="form-group">
              <label>Linkdin Url</label>
           <input type="text" name ="linkdin_url" class="form-control"  value="
             {{(!empty($social_sites)?$social_sites->linkdin:'')}}">
            </div>
          </div>
        </div>
     
      <div class="row">  
         <div class="col-md-12">
            <div class="form-group">
              <label>Skype Number</label>
           <input type="text" name ="skype_number" class="form-control" value="
             {{(!empty($settings['skype_number'])?$settings['skype_number']:'')}}">
            </div>
          </div>
        </div>

        <div class="row">  
          <div class="col-md-3">
            <div class="form-group">
              <label>Total Courses</label>
                <input type="text" name ="courses" class="form-control" value="{{(!empty($settings['courses'])?$settings['courses']:'')}}">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Selected Students</label>
                <input type="text" name ="selected_std" class="form-control" value="{{(!empty($settings['selected_std'])?$settings['selected_std']:'')}}">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Total Students</label>
                <input type="text" name ="total_std" class="form-control" value="{{(!empty($settings['total_std'])?$settings['total_std']:'')}}">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Awards Recieved</label>
                <input type="text" name ="awards" class="form-control" value="{{(!empty($settings['awards'])?$settings['awards']:'')}}">
            </div>
          </div>
        </div>

        <div class="row">  
         <div class="col-md-12">
            <div class="form-group">
              <label>Address</label>
            <textarea name="address" rows="6" cols="80" ></textarea>
            </div>
          </div>
        </div>
      
        <div class="box-footer">
          <a href="{{url('admin/generalSettings')}}" class="btn btn-default">Cancel</a>
          <button type="button" data-request="ajax-submit" data-target='[role="edit-settings"]' class="btn btn-info pull-right">Submit</button>
        </div>
	    </form>
     </div>	
   </div>
  </div>
@section('requirejs')

<!--to set value in any editor -->
  <script type="text/javascript">
    $(document).ready(function(){
      var val = "{{$settings['address']}}";
      nicEditors.findEditor( "description" ).setContent(val);
   });  
  </script>
  <script>
  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#adminimg').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
      }
</script>
<!--to set value in any editor -->

@endsection