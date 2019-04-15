
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Subscribers</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Contact List</h3>
              {{-- <div class="pull-right">
                <a href="{!! url('admin/contact/create') !!}" class="btn btn-primary btn-add"><i class="fa fa-plus"></i> Add Contact</a>
              </div> --}} -->
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                 <th>S.no</th>
                  <th>Email</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
               @php  
                 $i=0;
                @endphp
                @foreach($subscription as $subscriptions)
                @php
                  $i++;
                @endphp
                      <tr>
                        <td> {{$i}}</td>
                          <td>{{$subscriptions['email']}}</td>
                          <td>{{$subscriptions['status']}}</td>
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