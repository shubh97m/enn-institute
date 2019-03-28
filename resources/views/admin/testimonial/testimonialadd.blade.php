
<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Add Testimonial</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form method="POST" data-request="enable-enter" role="add-testimonial" action="{!! action('Admin\TestimonialController@store') !!}" class="form-horizontal form-label-left">
            {{csrf_field()}}
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Review<span class="required">*</span>

                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea name="review" class="form-control" placeholder="Review Text" rows="6"></textarea>
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name<span class="required">*</span>

                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="name" class="form-control col-md-7 col-xs-12" name="client" placeholder="e.g John Doe" type="text">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slug">Designation<span class="required">*</span>

                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="slug" class="form-control col-md-7 col-xs-12" name="designation" placeholder="e.g Student" type="text">
                </div>
            </div>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slug">Image<span class="required"></span>

                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="image" class="form-control col-md-7 col-xs-12" name="image"  type="file">
                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <button type="button" data-request="ajax-submit" data-target='[role="add-testimonial"]' class="btn btn-success btn-block add_testimonial">Add Testimonial</button>
                </div>
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