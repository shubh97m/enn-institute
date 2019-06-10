<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Add Courses</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form role="add-mainCourses" method="POST" action="{{url('admin/sub-courses/add')}}">
        {{csrf_field()}}
      <div class="row">
          <div class="col-md-12">
          <div class="form-group">
            <label>Main course Name:</label>
               <select class="form-control" name="course_id" id="courseName">
                 <option value="">Select Main Course</option>
                 @foreach($maincourse as $maincourses)
                  <option value="{{!empty($maincourses['id'])?$maincourses['id']:''}}">{{!empty($maincourses['name'])?$maincourses['name']:''}}</option>
                 @endforeach
               </select>    
            {{-- <textarea id="description" name="" rows="6" cols="80"></textarea> --}}
          </div>
        </div>
        </div>  
        <div class="form-row">
            <div class="form-group">
              <label>Course Name:</label>
              <input type="text" class="form-control" placeholder="Enter Course Name..." 
              name="name">
            </div>
          </div>
         <div class="form-group">
              <label>Course image:</label>
              <div>
                <input onchange="readURL(this)" id="uploadFile" accept="image/*" name="image" type="file">
              </div>
              <div>
                <img style="max-width: 250px;" src="{{asset('assets/img/avatar.png')}}" id="adminimg" alt="No Featured Image Added">
              </div>
        </div>
        <div class="row">
          <div class="col-md-12">
          <div class="form-group">
            <label>Course Description:</label>
            <textarea name="description" rows="6" cols="80"></textarea>
          </div>
        </div>
        </div>


         <div class="box-footer">
          <a href="{{url('admin/list-courses')}}" class="btn btn-default">Cancel</a>
          <button type="button" data-request="ajax-submit" data-target='[role="add-mainCourses"]' class="btn btn-info pull-right">Submit</button>
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