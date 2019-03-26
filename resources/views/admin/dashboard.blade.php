<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <!-- <li><a href="{{url('admin/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li> -->
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">

      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>1</h3>

            <p>Courses</p>
          </div>
          <div class="icon">
            <i class="fa fa-user-secret"></i>
          </div>
          <a href="{{url('admin/list-courses')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>1</h3>
            <p>No. of Members</p>
          </div>
          <div class="icon">
            <i class="fa fa-fw fa-sitemap"></i>
          </div>
          <a href="{{url('admin/')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    

      <!-- ./col -->
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->