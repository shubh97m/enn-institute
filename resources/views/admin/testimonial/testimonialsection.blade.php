
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Testimonial</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Testimonials List</h3>
              <div class="pull-right">
                <a href="{!! url('admin/testimonial/create') !!}" class="btn btn-primary btn-add"><i class="fa fa-plus"></i> Add Testimonial</a>
              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                 <th>S.no</th>
                  <th>Image</th>
                  <th>Review</th>
                  <th>Designation</th>
                  <th>Name</th>
                  <th >Actions</th>
                </tr>
                </thead>
                <tbody>
               @php  
                 $i=0;
                @endphp
                @foreach($testimonials as $testimonial)
                @php
                  $i++;
                @endphp
                      <tr>
                        <td> {{$i}}</td>
                        <td> 
                          <img src="{{asset('assets/img/testimonial/'.$testimonial['image'])}}"
                          class="list_img" / >
                        </td>
                        <td>{!!$testimonial['review']!!}</td>
                        <td> {{$testimonial['designation']}}</td>
                        <td> {{$testimonial['client']}}</td>
                        <td>
                           <a href="{{url(sprintf('admin/testimonial/%s/edit',___encrypt($testimonial['id'])))}}"  title="Edit Detail"><i class="fa fa-edit"></i></a> |
                        <a href="javascript:void(0);" 
                        data-url="{{url(sprintf('admin/testimonialDel/%s/delete',___encrypt($testimonial['id'])))}}" 
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