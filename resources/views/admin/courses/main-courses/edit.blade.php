<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Main Courses</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <form role="edit-courses" method="POST" action="{{url('admin/main-courses/edit/'.___encrypt($courses['id'])) }}">
        {{csrf_field()}}
       {{--  <input type="hidden" value="PUT" name="_method"> --}}
        <div class="col-md-12">
          <div class="form-group">
            <input type="hidden" id="id" name="id" class="form-control" value="{{!empty($courses['id'])?$courses['id']:''}}">
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
                  <img style="max-width: 250px;" src="{{asset('assets/img/Courses/'.$courses['image'])}}" id="adminimg" alt="No Image Added" class="list_mg">
              </div>
            </div>
          </div>
         </div>
        <div class="row">  
         <div class="col-md-12">
            <div class="form-group">
              <label>Course Title:</label>
            <input type="text" id="id" name="name" class="form-control" value="{{!empty($courses['name'])?$courses['name']:''}}">
            </div>
          </div>
        </div>

        <div class="row">  
         <div class="col-md-12">
            <div class="form-group">
              <label>Course Description:</label>
            <textarea id="description" name="description" rows="6" cols="80">
            {{!empty($courses['description'])?$courses['description']:''}}</textarea>
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

    $(document).ready(function(){
      var val = "{{$courses['description']}}";
      nicEditors.findEditor( "description" ).setContent(val);
   });  
    
</script>

@endsection