<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Covid_Demak</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('frontend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{url('frontend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url('frontend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{url('frontend/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('frontend/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('frontend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url('frontend/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{url('frontend/plugins/summernote/summernote-bs4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
    </ul>

    <!-- SEARCH FORM -->
          </button>
        </div>
      </div>
    </form>
</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
        </div>
      <!-- Message End -->
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{url('frontend/dist/img/logo6.png') }}" alt="logo6" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Covid_Demak</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <li id="removable">
                            <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false"><a class="nav-link" href="{{ ('docmed') }}/index.html">
                            <a class="nav-link" href="{{ ('docmed') }}/index.html">
        <i class="fa fa-home"></i>
          <span>Home</span></a>
      </li>
                            </ul>
                             <li id="removable">
                             <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                                <a title="Input" href="{{ ('frontend') }}/.html"><i class="fa fa-mouse" aria-hidden="true"></i><span class="mini-sub-pro">Input</span></a>
                            </ul>
                            </li>
                            </li>
                             <li id="removable">
                            <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                                <a title="Edit" href="{{ ('frontend') }}/.html"><i class="fa fa-edit" aria-hidden="true"></i><span class="mini-sub-pro">Edit</span></a>
                            </ul>
                            </li>
                        </li>
                             <li id="removable">
                            <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                            </ul>
                            </li>
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">INPUT DATA</h1>
          </div><!-- /.col -->
          <div class="content">
          <br>
<section class="header5 cid-r7o72Bhmed mbr-fullscreen" id="header5-3">
    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(130, 130, 130);">
    </div>
    <div class="form-row">
             <div class="col-md-6 form-group">
              <div class="heading">
                Nama Fasilitas Kesehatan*
              </div>
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
               Harga
              </div>
              <input type="tel" class="form-control" name="phone" id="phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
                Jenis Fasilitas Kesehatan*
              </div>
              <select name="department" id="department" class="form-control">
                <option value="Rumah Sakit">Rumah Sakit</option>
                <option value="Klinik">Klinik</option>
                <option value="Puskesmas">Puskesmas</option>
                <option value="Lab">Lab</option>
              </select>
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
               Nomor Telepon
              </div>
              <input type="tel" class="form-control" name="phone" id="phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
                Jenis Tes Yang Tersedia*
              </div>
              <select name="doctor" id="doctor" class="form-control">
                <option value="Rapid">Rapid</option>
                <option value="PCR/Swab">PCR/Swab</option>
              </select>
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
                Alamat
              </div>
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
            </div>
            <br>
            <div class="container-contact100-form-btn">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.930198043286!2d110.63170941477271!3d-6.898951895014958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70ebeeb9ebf6b5%3A0x9c3fcc7034f9e865!2sHospital%20Sunan%20Kalijaga!5e0!3m2!1sen!2sid!4v1601355489902!5m2!1sen!2sid" width="400" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <br>
            <br>
            <button class="contact100-form-btn">
            <span>
            Submit
            <i class="fa fa-long-arrow-right m-1-7" aria-hidden="true"></i>
            </span>
            <br>
            </button>
</section>
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
              <!-- /.card-body -->
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url('frontend/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('frontend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{url('frontend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{url('frontend/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{url('frontend/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{url('frontend/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{url('frontend/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('frontend/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{url('frontend/plugins/moment/moment.min.js') }}"></script>
<script src="{{url('frontend/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('frontend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{url('frontend/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{url('frontend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{url('frontend/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('frontend/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('frontend/dist/js/pages/dashboard.js') }}"></script>
</body>
</html>
