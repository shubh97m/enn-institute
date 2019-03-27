<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Add Gallery</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form role="add-partner" method="POST" action="{!! action('Admin\GalleryController@store') !!}">
        {{csrf_field()}}
         <div class="form-group">
            <label>Category Name:</label>
               <select class="form-control" name="gallery_category_id" id="gallery_category_id">
                 <option value="">Select Category</option>
                 @foreach($gallery_cat as $maincourses)
                  <option value="{{!empty($maincourses['id'])?$maincourses['id']:''}}">{{!empty($maincourses['name'])?$maincourses['name']:''}}</option>
                 @endforeach
               </select>    
            {{-- <textarea id="description" name="" rows="6" cols="80"></textarea> --}}
          </div>
            <div class="form-group">
              <label>Title:</label>
              <input type="text" class="form-control" placeholder="Enter Title..." 
              name="title">    
            {{-- <textarea id="description" name="" rows="6" cols="80"></textarea> --}}
          </div>
         
        <div class="form-group">
          <label>Gallery's Image:</label>
          <div>
              <input onchange="readURL(this)" id="uploadFile" accept="image/*" name="image" type="file">
          </div>
          <div>
            <img style="max-width: 250px;" src="{{asset('assets/img/avatar.png')}}" id="adminimg" alt="No Image Added">
          </div>
        </div>

         <div class="box-footer">
          <a href="{{url('admin/gallery')}}" class="btn btn-default">Cancel</a>
          <button type="button" data-request="ajax-submit" data-target='[role="add-partner"]' class="btn btn-info pull-right">Submit</button>
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