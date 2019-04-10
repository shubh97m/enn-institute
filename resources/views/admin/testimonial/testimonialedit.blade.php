
<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Testimonial</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form method="POST" data-request="enable-enter" role="edit-testimonial" action="{!! action('Admin\TestimonialController@update',['id'=>$testimonial->id]) !!}" class="form-horizontal form-label-left">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Student Review<span class="required">*</span>

            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea name="review" class="form-control" placeholder="Review Text" rows="6">{{$testimonial->review}}</textarea>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Student Name<span class="required">*</span>

            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="name" class="form-control col-md-7 col-xs-12" name="client" value="{{$testimonial->client}}" placeholder="e.g John Doe" type="text">
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slug">Student Designation<span class="required">*</span>

            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="slug" class="form-control col-md-7 col-xs-12" name="designation" value="{{$testimonial->designation}}" placeholder="e.g CEO" type="text">
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slug">Student Image<span class="required"></span>

            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="slug" class="form-control col-md-7 col-xs-12" name="image"   type="file">
            </div>
            
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slug">
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                @if(!empty($testimonial->image))
                    <img src="{{url('assets/img/testimonial/'.$testimonial->image)}}" >
                @else
                    <img src="{{url('assets/images/testimonial/avatar.png')}}" >
                @endif
            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button type="button" data-request="ajax-submit" data-target='[role="edit-testimonial"]' class="btn btn-success btn-block edit_testimonial">Update Testimonial</button>
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