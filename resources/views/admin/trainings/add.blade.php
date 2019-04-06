<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Add Trainings</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form role="add-training" method="POST" action="{!! action('Admin\TrainingController@store') !!}">
        {{csrf_field()}}

        <div class="row">
         <div class="col-md-12">
          <div class="form-group">
            <label>Training Catagory:</label>
            <input type ="text" name="training_type" class="form-control" placeholder="Enter Training's Catagory ">
          </div>
         </div>
        </div>
        <div class="row">
         <div class="col-md-12">
          <div class="form-group">
            <label>Courses Name </label>
            <select class="form-control" name="course_id" id="courseName" >
              <option value="">---Select courses to add---</option>
                @foreach($course as $trainings)
                <option value="{{!empty($trainings['id'])?$trainings['id']:''}}">{{!empty($trainings['name'])?$trainings['name']:''}}</option>
                @endforeach 
            </select>
          </div>
         </div>
        </div>
       
         <div class="box-footer">
          <a href="{{url('admin/sliders')}}" class="btn btn-default">Cancel</a>
          <button type="button" data-request="ajax-submit" data-target='[role="add-training"]' class="btn btn-info pull-right">Submit</button>
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