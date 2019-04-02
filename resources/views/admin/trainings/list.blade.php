
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tranings</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Traning List</h3>
              <div class="pull-right">
                <a href="{!! url('admin/trainings/create')!!}" class="btn btn-primary btn-add"><i class="fa fa-plus"></i> Add Trainings
                </a>
              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                 <th>S.no</th>
                  <th>Course Name</th>
                  <th>Training Type </th>
                  <th>Status</th>
                  <th >Actions</th>
                </tr>
                </thead>
                <tbody>
               @php  
                 $i=0;
                @endphp
                @foreach($training as $trainings)
                @php
                  $i++;
                @endphp
                      <tr>
                        <td> {{$i}}</td>
                        <td> {{$trainings['course_id']}}</td>
                        <td> {{$trainings['training_type']['name']}}</td>
                       <td> {{$trainings['status']}}</td>
                        <td>
                           <a href="{{url(sprintf('admin/training/%s/edit',___encrypt($trainings['id'])))}}"  title="Edit Detail"><i class="fa fa-edit"></i></a> |
                        {{-- <a href="javascript:void(0);" 
                        data-url="{{url(sprintf('admin/our-partners/%s/delete',___encrypt($partners['id'])))}}" 
                        data-request="ajax-confirm"
                        data-ask_image="{{url('assets/img/delete.png')}}"
                        data-ask="Would you like to Delete?" title="Delete"><i class="fa fa-fw fa-trash"></i></a> | --}}

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