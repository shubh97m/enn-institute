<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Gallery Category</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

 <form role="edit-partner" method="POST" action="{{url('admin/gallery-category/update/'.___encrypt($category['id'])) }}">
  
          <div class="form-row">
            <div class="form-group">
              <label>Category Name:</label>
              <input type="text" class="form-control" placeholder="Enter Category Name..." 
              name="name" value="{{!empty($category['name'])?$category['name']:''}}">
            </div>
          </div>

         <div class="box-footer">
          <a href="{{url('admin/our-partners')}}" class="btn btn-default">Cancel</a>
          <button type="button" data-request="ajax-submit" data-target='[role="edit-partner"]' class="btn btn-info pull-right">Submit</button>
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