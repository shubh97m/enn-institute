<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Add Slider</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form role="add-slider" method="POST" action="{!! action('Admin\sliderController@store') !!}">
        {{csrf_field()}}
        <div class="form-group">
          
          <label>Slider Image(1349px * 450px):</label>
          <div>
              <input onchange="readURL(this)" id="uploadFile" accept="image/*" name="image" type="file">
          </div>
          <div>
            <img style="max-width: 250px;" src="{{asset('assets/img/avatar.png')}}" id="adminimg" alt="No Image Added">
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
          <div class="form-group">
            <label>Slider Description:</label>
            <textarea id="description" name="text" rows="6" cols="80"></textarea>
          </div>
        </div>
        </div>
         <div class="box-footer">
          <a href="{{url('admin/sliders')}}" class="btn btn-default">Cancel</a>
          <button type="button" data-request="ajax-submit" data-target='[role="add-slider"]' class="btn btn-info pull-right">Submit</button>
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