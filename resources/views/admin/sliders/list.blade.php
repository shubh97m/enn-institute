 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Slider</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sliders List</h3>
              <div class="pull-right">
                <a href="{!! url('admin/sliders/create') !!}" class="btn btn-primary btn-add"><i class="fa fa-plus"></i> Add Slider</a>
              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                 <th>S.no</th>
                  <th>Image</th>
                  <th>Slider Text</th>
                  <th>Status</th>
                  <th >Actions</th>
                </tr>
                </thead>
                <tbody>
               @php  
                 $i=0;
                @endphp
                @foreach($sliders as $slider)
                @php
                  $i++;
                @endphp
                      <tr>
                        <td> {{$i}}</td>
                        <td> 
                          <img src="{{asset('assets/img/Sliders/'.$slider['image'])}}"
                          class="list_img" / >
                        </td>
                        <td>{!!$slider['text']!!}</td>
                        <td> {{$slider['status']}}</td>
                        <td>
                           <a href="{{url(sprintf('admin/sliders/%s/edit',___encrypt($slider['id'])))}}"  title="Edit Detail"><i class="fa fa-edit"></i></a> |
                        <a href="javascript:void(0);" 
                        data-url="{{url(sprintf('admin/sliders/%s/delete',___encrypt($slider['id'])))}}" 
                        data-request="ajax-confirm"
                        data-ask_image="{{url('assets/img/delete.png')}}"
                        data-ask="Would you like to Delete?" title="Delete"><i class="fa fa-fw fa-trash"></i></a> |

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