<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Sub Courses</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <form role="edit-courses" method="POST" action="{{url('admin/sub-courses/edit/'.___encrypt($childcourses['id']))}}">
        {{csrf_field()}}
        <div class="col-md-12">
          <div class="form-group">
            <input type="hidden" id="id" name="id" class="form-control" value="{{!empty($childcourses['id'])?$childcourses['id']:''}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
          <div class="form-group">
            <label>Main course Name:</label>
               <select class="form-control" name="course" id="main_course">
                 <option value="">Select Main Course</option>
                 @foreach($maincourse as $maincourses)
                  <option value="{{!empty($maincourses['id'])?$maincourses['id']:''}}" @if($maincourses['id']==$childcourses['course'])  selected @endif)>{{!empty($maincourses['name'])?$maincourses['name']:''}}</option>
                 @endforeach
               </select>    
            {{-- <textarea id="description" name="" rows="6" cols="80"></textarea> --}}
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label> Sub course Name:</label>
               <select class="form-control" name="sub_course" id="sub_course">
                 <option value="">Select Sub Course</option>
                 @php
                  $subcourse = \App\Models\SubCourses::where('course_id',$childcourses['course'])->get();
                 @endphp
                 @foreach($subcourse as $subcourses)
                    <option value="{{$subcourses->id}}" @if($subcourses->id==$childcourses['sub_course'])  selected @endif>{{$subcourses->name}}</option>
                  @endforeach
               </select>    
            {{-- <textarea id="description" name="" rows="6" cols="80"></textarea> --}}
          </div>
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
                  <img style="max-width: 250px;" src="{{asset('assets/img/Courses/'.$childcourses['image'])}}" id="adminimg" alt="No Image Added" class="list_mg">
              </div>
            </div>
          </div>
         </div>
        <div class="row">  
         <div class="col-md-12">
            <div class="form-group">
              <label>Course Title:</label>
            <input type="text" id="id" name="name" class="form-control" value="{{!empty($childcourses['name'])?$childcourses['name']:''}}">
            </div>
          </div>
        </div>

       

        <div class="box-footer">
          <a href="{{url('admin/courses')}}" class="btn btn-default">Cancel</a>
          <button type="button" data-request="ajax-submit" data-target='[role="edit-courses"]' class="btn btn-info pull-right">Submit</button>
        </div>
      </form>
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
  $(function() {
    $('#main_course').change( function() {
      var val = $(this).val();
          $('#othstate').val('').hide();
          $.ajax({
             url: '{{url('admin/sub_course_list')}}',
             dataType: 'html',
             data: { id : val },
             success: function(data) {
                 $('#sub_course').html( data );
             }
          });
    });
  });

</script>
@endsection