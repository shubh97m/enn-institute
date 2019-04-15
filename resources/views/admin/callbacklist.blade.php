 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">CallBack List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">CallBack List</h3>
              <div class="pull-right">
                <a href="{{url('admin/callback/export')}}" class="btn btn-primary btn-add"><i class="fa fa-plus"></i><span class="hidden-480">Export</span>
                </a>
              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                 <th>S.no</th>
                  <th>Name</th>
                  <th>E-mail</th>
                  <th>Mobile Number</th>
                  <th >Course</th>
                  <th >Message</th>
                  <th >Status</th>
                </tr>
                </thead>
                <tbody>
               @php  
                 $i=0;
                @endphp
                @foreach($callback as $callbacks)
                @php
                  $i++;
                @endphp
                      <tr>
                        <td> {{$i}}</td>
                        <td> {{$callbacks['name']}}</td>
                        <td> {{$callbacks['email']}}</td>
                        <td> {{$callbacks['mobile']}}</td>
                        <td> {{$callbacks['courses']}}</td>
                        <td> {{$callbacks['message']}}</td>
                        <td> {{ucfirst($callbacks['status'])}}</td>
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