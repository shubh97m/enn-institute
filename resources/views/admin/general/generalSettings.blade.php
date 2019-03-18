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
              <input type="text" name ="phone" class="form-control" 
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
              <label>Address</label>
            <textarea id="description" name="address" rows="6" cols="80" ></textarea>
            </div>
          </div>
        </div>
      
      <div class="row">  
         <div class="col-md-12">
            <div class="form-group">
              <label>Social Icons</label>
           <input type="text" name ="social_sites" class="form-control" value="
             {{trim(!empty($settings['social_sites'])?$settings['social_sites']:'')}}">
            </div>
          </div>
        </div>

      <div class="row">  
         <div class="col-md-12">
            <div class="form-group">
              <label>Skype Number</label>
           <input type="text" name ="social_sites" class="form-control" value="
             {{(!empty($settings['skype_number'])?$settings['skype_number']:'')}}">
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
<!--to set value in any editor -->

@endsection