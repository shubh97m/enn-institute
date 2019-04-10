<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Add Slider</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form role="add-scholarship" method="POST" action="{!! action('Admin\ScholarshipController@store') !!}">
        {{csrf_field()}}
           <div class="form-group">
              <label>Name:</label>
              <input type="text" class="form-control" placeholder="Enter Title..." 
              name="name">    
            {{-- <textarea id="description" name="" rows="6" cols="80"></textarea> --}}
          </div>
           <div class="form-group">
              <label>Email:</label>
              <input type="text" class="form-control" placeholder="Enter Title..." 
              name="email">    
            {{-- <textarea id="description" name="" rows="6" cols="80"></textarea> --}}
          </div>
           <div class="form-group">
              <label>Phone:</label>
              <input type="text" class="form-control" placeholder="Enter Title..." 
              name="phone">    
            {{-- <textarea id="description" name="" rows="6" cols="80"></textarea> --}}
          </div>
           <div class="form-group">
              <label>Course:</label>
              <input type="text" class="form-control" placeholder="Enter Title..." 
              name="course">    
            {{-- <textarea id="description" name="" rows="6" cols="80"></textarea> --}}
          </div>
           <div class="form-group">
              <label>College Name:</label>
              <input type="text" class="form-control" placeholder="Enter Title..." 
              name="college_name">    
            {{-- <textarea id="description" name="" rows="6" cols="80"></textarea> --}}
          </div>
       
        </div>
         <div class="box-footer">
          <a href="{{url('admin/sliders')}}" class="btn btn-default">Cancel</a>
          <button type="button" data-request="ajax-submit" data-target='[role="add-scholarship"]' class="btn btn-info pull-right">Submit</button>
        </div>
      </form>
    </div>
   </div>
 </div>   
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