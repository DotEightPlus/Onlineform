<?php
session_start();
if(!isset($_SESSION['started'])) {
  header("location: ./login");
}
?>


<?php include("includes/navbar.php"); ?>

<!-- Content Wrapper. Contains page content -->
  <div style="margin-left: 0px;"  class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Form</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



 <!-- Main content -->
    <section class="content">
          <!-- right column -->
          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit form input field</span></h3>
                 <div class="card-tools">
                    <button type="button" data-toggle="tooltip" title="Minimize" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="edited.php" role="form">
                  <div class="form-group">
                    <label for="Landlord Address">Landlord Address:</label>
                    <textarea type="text" required name="land_add" class="form-control col-sm-12 col-lg-6" rows="3" id="sn" placeholder="eg: David Westley
14018 n 39th ave
Phonix, Arizona 85053"></textarea>
                  </div>
                   <div class="form-group">
                        <label>Address of house to be rented:</label>
                        <textarea type="text" required name="rent_add" class="form-control col-sm-12 col-lg-6" rows="3" id="ques" placeholder="eg:  House
9327 Brushy point st
San Antonio, Texas 78250"></textarea>
                      </div>
                   <div class="row">
                    <div class="col-sm-6">
                       <div class="form-group">
                    <label for="securitydeposit">Security Deposit ($):</label>
                    <input type="number" required class="form-control" name="secure_depo" id="oa" placeholder="e.g 1000">
                  </div>
                    </div>

                    <div class="col-sm-6">
                       <div class="form-group">
                    <label for="Petdeposit">Pet Deposit ($):</label>
                    <input type="number" required class="form-control" name="pet_depo" id="ob" placeholder="e.g 1000">
                  </div>
                    </div>
                    
                  </div>

                 <!--   <div class="row">
                    <div class="col-sm-6">
                       <div class="form-group">
                    <label for="exampleInputEmail1">Option C .:</label>
                    <input type="text" class="form-control" id="oc" placeholder="e.g inc">
                  </div>
                    </div>

                    <div class="col-sm-6">
                       <div class="form-group">
                    <label for="exampleInputEmail1">Option D .:</label>
                    <input type="text" class="form-control" id="od" placeholder="e.g ek">
                  </div>
                    </div>
                    
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Correct Answer .:</label>
                        <select id="correct" class="form-control">
                          <option id="correct">Option A</option>
                          <option id="correct">Option B</option>
                          <option id="correct">Option C</option>
                          <option id="correct">Option D</option>
                        </select>
                      </div>
 -->

                  <p class="text-danger">Make sure you recheck all questions typed in before uploading</p>
                   <button type="submit" id="Questionaire" class="btn float-right btn-danger btn-outline-light">Save and Update Changes</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
           
          </div>
          <!--/.col (right) -->
    </section>
    <!-- /.content -->   


      </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
<script src="ajax.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
  });

</script>

<!--notification for deleted-->
<?php
if(isset($_GET['del'])) {
  $deleted = $_GET['del'];
  echo "<script>$(toastr.error('Question Deleted Successfully'));</script>";
}
?>

<!--notification for upload question-->
<?php
if(isset($_GET['quest'])) {
  $ques = $_GET['quest'];
  echo "<script>$(toastr.error('Question Uploaded Successfully'));</script>";
}
?>


<!--notification for reset question-->
<?php
if(isset($_GET['res'])) {
  $res = $_GET['res'];
  echo "<script>$(toastr.error('Question(s) Resetted Successfully'));</script>";
}
?>


<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": true,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
    });
  });
</script>
</body>
</html>