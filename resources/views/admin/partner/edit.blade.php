<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Add Partners</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

 <form role="edit-partner" method="PUT" action="{{url('admin/our-partners/'.___encrypt($partner['id'])) }}">
  <input type="hidden" name="_method" value="PUT">
           <div class="form-group">
          <label>Partner's Image:</label>
          <div>
              <input type="file" onchange="readURL(this)" id="uploadFile" class="form-control"  name="image" >
          </div>
          <div>
              <img style="max-width: 250px;" src="{{asset('assets/img/Partners/'.$partner['image'])}}" id="adminimg" alt="No Featured Image Added" class="list_mg">
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