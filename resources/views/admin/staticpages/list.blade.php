 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Static Pages</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Static Pages List</h3>
              <div class="pull-right">
                <!-- <a href="{!! url('admin/staticpages/create') !!}" class="btn btn-primary btn-add"><i class="fa fa-plus"></i> Add Static Page</a> -->
              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                 <th>S.no</th>
                  <th>Image</th>
                  <th>Static Page Name</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th >Actions</th>
                </tr>
                </thead>
                <tbody>
               @php  
                 $i=0;
                @endphp
                @foreach($staticpages as $staticpage)
                @php
                  $i++;
                @endphp
                      <tr>
                        <td> {{$i}}</td>
                        <td><img src="{{asset('assets/img/staticpage/'.$staticpage['image'])}}"
                          class="list_img" /></td>
                        <td>{!!$staticpage['name']!!}</td>
                        <td> {{$staticpage['description']}}</td>
                        <td> {{$staticpage['status']}}</td>
                        <td>
                        <a href="{{url(sprintf('admin/staticpages/%s/edit',___encrypt($staticpage['id'])))}}"  title="Edit Detail"><i class="fa fa-edit"></i></a> |
                        </td>
                        </tr>
                    @endforeach
           
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

       
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>