
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Courses Catagory</li>
      </ol>
    </section>

    <!-- Main content -->
  <section class="content">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#courses" role="tab" aria-controls="home" aria-selected="true">Courses </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#sub-courses" role="tab" aria-controls="profile" aria-selected="false">Sub courses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#child-courses" role="tab" aria-controls="contact" aria-selected="false">Child Courses</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
    <!-- Tab pane first-->
  <div class="tab-pane active in" id="courses" role="tabpanel" aria-labelledby="home-tab">
    {{-- <div class="contentWrapper"> --}}
    <!-- Content Header (Page header) -->
    {{-- <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Courses</li>
      </ol>
    </section> --}}
    <!-- Main courses -->
     <div class="col-lg-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Main Courses</h3>
              <div class="pull-right">
                <a href="{!! url('admin/main-courses/add') !!}" class="btn btn-primary btn-add"><i class="fa fa-plus"></i> Add Courses</a>
              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                 <th>S.no</th>
                  <th>Course Name</th>
                  <th>Image</th>
                  <th>Course Description</th>
                  <th>Status</th>
                  <th >Actions</th>
                </tr>
                </thead>
                <tbody>
            @php  
                 $i=0;
                @endphp
                @foreach($course as $courses)
                @php
                  $i++;
                @endphp
                       <tr>
                        <td> {{$i}}</td>
                        <td> {{$courses['title']}}
                        </td>
                        <td>   <img src="{{asset('assets/img/Courses/'.$courses['image'])}}"
                          class="list_img" / >
                        </td>
                        <td> {{$courses['description']}}</td>
                        <td> {{$courses['status']}}</td>
                        <td>
                        <a href="javascript:void(0);" 
                        data-url="{{url(sprintf('admin/list-courses/%s/delete',___encrypt($courses['id'])))}}" 
                        data-request="ajax-confirm"
                        data-ask_image="{{url('assets/img/delete.png')}}"
                        data-ask="Would you like to Delete?" title="Delete"><i class="fa fa-fw fa-trash"></i>
                        </a> |
                        </td>
                        </tr>
                    @endforeach
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
    </div>
  <!-- Tab pane first Ends here--> 

  <!-- Tab pane Seconds starts here--> 
  <div class="tab-pane" id="sub-courses" role="tabpanel" aria-labelledby="profile-tab">
        <div class="col-lg-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sub Courses</h3>
              <div class="pull-right">
                <a href="{!! url('admin/sub-courses/addSubCourses') !!}" class="btn btn-primary btn-add"><i class="fa fa-plus"></i> Add  Sub Courses</a>
              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                 <th>S.no</th>
                  <th>Course Name</th>
                  <th>Status</th>
                  <th >Actions</th>
                </tr>
                </thead>
                <tbody>
               @php  
                 $i=0;
                @endphp
                @foreach($subCourse as $subCourses)
                @php
                  $i++;
                @endphp
                       <tr>
                        <td> {{$i}}</td>
                        <td> {{$subCourses['title']}}
                        </td>
                        <td>  <img src="{{asset('assets/img/Courses/'.$subCourses['image'])}}"
                          class="list_img" / >
                        </td>
                        <td> {{$subCourses['description']}}</td>
                        <td> {{$subCourses['status']}}</td>
                        <td>
                        <a href="javascript:void(0);" 
                        data-url="{{url(sprintf('admin/list-courses/%s/delete',___encrypt($subCourses['id'])))}}" 
                        data-request="ajax-confirm"
                        data-ask_image="{{url('assets/img/delete.png')}}"
                        data-ask="Would you like to Delete?" title="Delete"><i class="fa fa-fw fa-trash"></i>
                        </a> |
                        </td>
                        </tr>
                    @endforeach
                </tbody>
               
              </table>
            {{-- </div> --}}
            <!-- /.box-body -->
          {{-- </div> --}}
          <!-- /.box -->

       
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
  </div>
</div>
  <!-- Tab pane Seconds Ends here--> 

    <!-- Tab pane third starts here--> 
<div class="tab-pane fade" id="child-courses" role="tabpanel" aria-labelledby="contact-tab">
     {{-- <div class="content-wrapper"> --}}
      <!-- Content Header (Page header) -->
        <div class="col-lg-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Child Courses</h3>
              <div class="pull-right">
                <a href="{!! url('admin/child-courses/addChildCourses') !!}" class="btn btn-primary btn-add"><i class="fa fa-plus"></i> Add Child courses</a>
              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                    <thead>
                <tr>
                 <th>S.no</th>
                  <th>Course Name</th>
                  <th>Course Description</th>
                  <th>Status</th>
                  <th >Actions</th>
                </tr>
                </thead>
                <tbody>
               @php  
                 $i=0;
                @endphp
                @foreach($childCourse as $childCourses)
                @php
                  $i++;
                @endphp
                       <tr>
                        <td> {{$i}}</td>
                        <td> {{$childCourses['title']}}
                        </td>
                        <td><img src="{{asset('assets/img/Courses/'.$childCourses['image'])}}"
                          class="list_img" / >
                        </td>
                        <td> {{$childCourses['description']}}</td>
                        <td> {{$childCourses['status']}}</td>
                        <td>
                        <a href="javascript:void(0);" 
                        data-url="{{url(sprintf('admin/list-courses/%s/delete',___encrypt($childCourses['id'])))}}" 
                        data-request="ajax-confirm"
                        data-ask_image="{{url('assets/img/delete.png')}}"
                        data-ask="Would you like to Delete?" title="Delete"><i class="fa fa-fw fa-trash"></i>
                        </a> |
                        </td>
                        </tr>
                    @endforeach
            
{{--                         <td>
                           <a href="{{url(sprintf('admin/sliders/%s/edit',___encrypt($slider['id'])))}}"  title="Edit Detail"><i class="fa fa-edit"></i></a> |
                        <a href="javascript:void(0);" 
                        data-url="{{url(sprintf('admin/sliders/%s/delete',___encrypt($slider['id'])))}}" 
                        data-request="ajax-confirm"
                        data-ask_image="{{url('assets/img/delete.png')}}"
                        data-ask="Would you like to Delete?" title="Delete"><i class="fa fa-fw fa-trash"></i></a> |

                        </td>
 --}}
                </tbody>
              </table>
            {{-- </div> --}}
            <!-- /.box-body -->
          {{-- </div> --}}
          <!-- /.box -->

       
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    
    <!-- /.content -->
  </div>
{{-- </div> --}}
</div>
  <!-- Tab pane Seconds Ends here--> 

</div>
</section>
</div>

