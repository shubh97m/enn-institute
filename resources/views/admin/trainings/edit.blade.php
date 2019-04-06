
<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Trainings </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form method="POST" data-request="enable-enter" role="edit-trainings" action="{{url('admin/trainings/'.___encrypt($trainings['id'])) }}" class="form-horizontal form-label-left">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PUT">
       <div class="row">
         <div class="col-md-12">
          <div class="form-group">
            <label>Training Catagory:</label>
            <input type="text" class="form-control" placeholder="Enter Training Type..." 
            name="training_type" value="{{!empty($trainings['training_type'])?$trainings['training_type']:''}}">           
          </div>
         </div>
       </div>
        <div class="row">
         <div class="col-md-12">
          <div class="form-group">
            <label>Courses Name </label>
               <select class="form-control" name="course_id" id="course_id">
                 <option value="">--Select Course--</option>
                 @foreach($course as $courses)
                  <option @if(!empty($courses['id']) && $courses['id']==$trainings['course_id']) selected @endif  value="{{!empty($courses['id'])?$courses['id']:''}}">{{!empty($courses['name'])?$courses['name']:''}}</option>
                 @endforeach
               </select>    
            </select>
          </div>
         </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button type="button" data-request="ajax-submit" data-target='[role="edit-trainings"]' class="btn btn-success  edit-trainings">Update training</button>
            </div>
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