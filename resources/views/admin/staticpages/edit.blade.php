<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Static Page</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <form role="edit-page" method="POST" action="{{url('admin/staticpages/edit/'.___encrypt($staticpage['id']))}}">
       {{csrf_field()}}
        <div class="col-md-12">
          <div class="form-group">
            <input type="hidden" id="id" name="id" class="form-control" value="{{!empty($staticpage['id'])?$staticpage['id']:''}}">
          </div>
        </div>

        <div class="form-group">
          <label>Page Title</label>
          <input type="text" name="name" class="form-control" placeholder="Enter Page Title" value="{{!empty($staticpage['name'])?$staticpage['name']:''}}">
        </div>

        <div class="item form-group">
          <label> Current Featured Image</label>
          <div>
            <input onchange="readURL(this)" id="uploadFile" accept="image/*" name="image" type="file">
          </div>
          <div>
             <img style="max-width: 250px;" src="{{url('assets/img/staticpage')}}/{{$staticpage['image']}}" id="adminimg" alt="No Featured Image Added">
          </div>
        </div>

        <div class="item form-group">
          <label>Description:</label>
          <textarea name="description" id="description" class="form-control" rows="6">{{!empty($staticpage['description'])?$staticpage['description']:''}}</textarea>
        </div>
   

        <div class="box-footer">
          <a href="{{url('admin/staticpages')}}" class="btn btn-default">Cancel</a>
          <button type="button" data-request="ajax-submit" data-target='[role="edit-page"]' class="btn btn-info pull-right">Submit</button>
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

  $(document).ready(function(){
      var val = "{{$staticpage['description']}}";
      nicEditors.findEditor( "description" ).setContent(val);
   });

</script>
@endsection