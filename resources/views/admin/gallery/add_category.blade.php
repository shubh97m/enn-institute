<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Add Gallery Category</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form role="add-mainCourses" method="POST" action="{{url('admin/gallery-category/store')}}">
        {{csrf_field()}}
    
        <div class="form-row">
          <div class="form-group">
            <label>Category Name:</label>
            <input type="text" class="form-control" placeholder="Enter Category Name..." 
            name="name">
          </div>
        </div>
       
        <div class="box-footer">
          <a href="{{url('admin/courses')}}" class="btn btn-default">Cancel</a>
          <button type="button" data-request="ajax-submit" data-target='[role="add-mainCourses"]' class="btn btn-info pull-right">Submit</button>
        </div>
      </form>
    </div>
   </div>
 </div>   


 {{--  <script type="text/javascript">

    $(document).ready(function(){
      var val = "{{$course['description']}}";
      nicEditors.findEditor( "description" ).setContent(val);
   });  

  </script>
 --}}