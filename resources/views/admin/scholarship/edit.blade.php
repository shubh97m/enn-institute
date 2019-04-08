```<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Scholarship</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
 <form role="edit-scholarship" method="POST" action="{{url('admin/scholarship/'.___encrypt($scholarships['id'])) }}">
  {{csrf_field()}}

  <input type="hidden" name="_method" value="PUT">
        <div class="col-md-12">
          <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" placeholder="Enter your name.." 
            name="name" value="{{!empty($scholarships['name'])?$scholarships['name']:''}}">           
          </div>
         </div>
       <div class="col-md-12">
          <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control" placeholder="Enter your email ..." 
            name="email" value="{{!empty($scholarships['email'])?$scholarships['email']:''}}">           
          </div>
        </div>     
      <div class="col-md-12">
          <div class="form-group">
            <label>Phone:</label>
            <input type="text" class="form-control" placeholder="Enter your number..." 
            name="phone" value="{{!empty($scholarships['phone'])?$scholarships['phone']:''}}">           
          </div>
        </div>    
       <div class="col-md-12">
          <div class="form-group">
            <label>Course:</label>
            <input type="text" class="form-control" placeholder="Enter Course..." 
            name="course" value="{{!empty($scholarships['course'])?$scholarships['course']:''}}">           
          </div>
        </div>   
       <div class="col-md-12">
          <div class="form-group">
            <label>College:</label>
            <input type="text" class="form-control" placeholder="Enter Course..." 
            name="college_name" value="{{!empty($scholarships['college_name'])?$scholarships['college_name']:''}}">           
          </div>
        </div>         
   


         <div class="box-footer">
          <a href="{{url('admin/scholarship')}}" class="btn btn-default">Cancel</a>
          <button type="button" data-request="ajax-submit" data-target='[role="edit-scholarship"]' class="btn btn-info pull-right">Submit</button>
        </div>
      </form>
    </div>
   </div>
 </div>   
@section('requirejs')
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
@endsection