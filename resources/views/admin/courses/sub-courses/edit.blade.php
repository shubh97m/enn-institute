<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Sub Courses</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <form role="edit-courses" method="POST" action="{{url('admin/sub-courses/edit/'.___encrypt($subcourses['id']))}}">
        {{csrf_field()}}
        <div class="col-md-12">
          <div class="form-group">
            <input type="hidden" id="id" name="id" class="form-control" value="{{!empty($subcourses['id'])?$subcourses['id']:''}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Course Image:</label>
               <div>
                  <input onchange="readURL(this)" id="uploadFile" accept="image/*" name="image" type="file">
              </div>
              <div>
                  <img style="max-width: 250px;" src="{{asset('assets/img/Courses/'.$subcourses['image'])}}" id="adminimg" alt="No Image Added" class="list_mg">
              </div>
            </div>
          </div>
         </div>
        <div class="row">  
         <div class="col-md-12">
            <div class="form-group">
              <label>Course Title:</label>
            <input type="text" id="id" name="name" class="form-control" value="{{!empty($subcourses['name'])?$subcourses['name']:''}}">
            </div>
          </div>
        </div>
           <div class="row">  
         <div class="col-md-12">
            <div class="form-group">
              <label>Course Description:</label>
            <textarea id="description" name="description" rows="6" cols="80" class="form-control" >{{!empty($subcourses['description'])?$subcourses['description']:''}}</textarea>
            </div>
          </div>
        </div> 

        <div class="col-md-12">
          <div class="form-group">
            <label>Main course Name:</label>
               <select class="form-control" name="course_id" id="courseName">
                 <option value="">Select Main Course</option>
                 @foreach($course as $courses)
                  <option value="{{!empty($courses['id'])?$courses['id']:''}}" 
                  @if($courses['id'] == $subcourses['course_id']) selected @endif>{{!empty($courses['name'])?$courses['name']:''}}</option>
                 @endforeach
               </select>    
            {{-- <textarea id="description" name="" rows="6" cols="80"></textarea> --}}
          </div>
        </div>

        <div class="box-footer">
          <a href="{{url('admin/courses')}}" class="btn btn-default">Cancel</a>
          <button type="button" data-request="ajax-submit" data-target='[role="edit-courses"]' class="btn btn-info pull-right">Submit</button>
        </div>
      </form>
    </div>
  @section('requirejs')
  <script type="text/javascript">
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