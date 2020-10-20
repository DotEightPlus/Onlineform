<?php
include("../functions/init.php");
if(!isset($_SESSION['started'])) {
  header("location: ./login");
}
?>
<?php
$data = $_GET['id'];
?>

<?php include("includes/navbar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div style="margin-left: 0px;" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
              <li class="breadcrumb-item active">Form Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
         <?php
 $sql="SELECT * FROM `form_data` WHERE `id` = '$data'";
 $result_set=query($sql);
 $row= mysqli_fetch_array($result_set)

  ?>  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-lg-12">
            <div class="card">
             
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        
                        <span class="username">
                        
                         <!--  <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a> -->
                        <p>
                        Landlord's Address.:  <?php echo $row['renter_add']; ?><br/>
                        Address of house to be rented.: <?php echo $row['rentee_add']; ?><br>
                        Desired date of Occupancy.:  <?php echo $row['occ_date']; ?><br/>
                        Desired length of Occupancy.: <?php echo $row['occ_length']; ?><br>
                        Number of bedrooms.:  <?php echo $row['bed_num']; ?><br/>
                        Reason for moving.: <?php echo $row['reason_move']; ?><br>
                        Security deposit.:  <?php echo $row['secure_depo']; ?><br/>
                        Pet deposit.: <?php echo $row['pet_depo']; ?><br>
                        Name of Applicant.:  <?php echo $row['full_name']; ?><br/>
                        Number of Adults and Children.: <?php echo $row['occ_num']; ?><br>
                        Is water bed wanted?.:  <?php echo $row['bed']; ?><br/>
                        Are there any smoker?.: <?php echo $row['smoke']; ?><br>
                        Are there any Pet.:  <?php echo $row['pet']; ?><br/><br>
                        <b>Present Address</b><br>
                        Address.: <?php echo $row['add_now']; ?><br>
                        How long at present address?.:  <?php echo $row['add_length']; ?><br/>
                        Home Phone number.: <?php echo $row['phone']; ?><br>
                        Current rent payment($).:  <?php echo $row['cur_rent']; ?><br/><br>
                        <b>Prior Address</b><br>
                        Address.: <?php echo $row['prior_add']; ?><br>
                        How long ?.:  <?php echo $row['prior_length']; ?><br/>
                        Landlord's name.: <?php echo $row['landlord_name']; ?><br>
                        Phone number.:  <?php echo $row['landlord_phone']; ?><br/>
                        Rent payment($).: <?php echo $row['rent_pay']; ?><br>
                        Reason for moving.:  <?php echo $row['reason']; ?><br/>
                        Source of income.: <?php echo $row['income_source']; ?><br>
                        Amount($).:  <?php echo $row['price']; ?><br/><br>
                        <b>Current Employer</b><br>
                        Employer name.: <?php echo $row['employer_name']; ?><br>
                        Position held.:  <?php echo $row['position']; ?><br/>
                        How long?.: <?php echo $row['employ_length']; ?><br>
                        Supervisor.:  <?php echo $row['supervisor']; ?><br/>
                        Business Phone.: <?php echo $row['biz_phone']; ?><br>
                        Annual income($).:  <?php echo $row['income']; ?><br/><br>
                        <b>Prior Employer</b><br>
                        Employer's name.: <?php echo $row['p_employer_name']; ?><br>
                        Position held.:  <?php echo $row['p_position']; ?><br/>
                        How long.: <?php echo $row['p_employ_length']; ?><br>
                        Supervisor.:  <?php echo $row['p_supervisor']; ?><br/>
                        Business Phone.: <?php echo $row['p_biz_phone']; ?><br>
                        Annual income($).: <?php echo $row['income']; ?><br><br>
                        <b>Nearest relative</b><br>
                        Name.:  <?php echo $row['relate_name']; ?><br/>
                        Address.: <?php echo $row['relate_add']; ?><br>
                        Home Phone Number.:  <?php echo $row['relate_phone']; ?><br/>
                        Relationship.: <?php echo $row['relate_relation']; ?><br><br>
                        <b>Personal Reference</b><br>
                        Name (1).:  <?php echo $row['per_name_1']; ?><br/>
                        Address (1).: <?php echo $row['per_add_1']; ?><br>
                        Phone Number (1).:  <?php echo $row['per_phone_1']; ?><br/>
                        Relationship (1).: <?php echo $row['per_relation_1']; ?><br>
                        Name (2).:  <?php echo $row['per_name_2']; ?><br/>
                        Address (2).: <?php echo $row['per_add_2']; ?><br>
                        Phone Number (2).:  <?php echo $row['per_phone_2']; ?><br/>
                        Realtionship (2).: <?php echo $row['per_relation_2']; ?><br><br>
                        Ever evicted form any rental premises? .:  <?php echo $row['evict']; ?><br/>
                        Explanation.: <?php echo $row['evict_ex']; ?><br><br>
                        Ever willingly or intentionally refused to pay rent when due? .:  
                          <?php echo $row['refused']; ?><br/>
                        Explanation.: <?php echo $row['refused_ex']; ?><br><br>
                        Any circumstances which may interrupt your income or ability to pay rent?.:
                          <?php echo $row['interrupt']; ?><br/>
                        Explanation.: <?php echo $row['interrupt_ex']; ?><br><br>
                        Ever convicted of a felony?.:  <?php echo $row['convicted']; ?><br/>
                        Explanation.: <?php echo $row['convicted_ex']; ?><br><br>
                        <b>Pets</b><br>
                        Name(1).:  <?php echo $row['pet_name_1']; ?><br/>
                        Type/breed(1).: <?php echo $row['pet_type_1']; ?><br>
                        Size(1).:  <?php echo $row['pet_size_1']; ?><br/>
                        Pet's livelihood(1).: <?php echo $row['indoor_1']; ?><br>
                        Name(2).:  <?php echo $row['pet_name_2']; ?><br/>
                        Type/Breed(2).: <?php echo $row['pet_type_2']; ?><br>
                        Size(2).:  <?php echo $row['pet_size_2']; ?><br/>
                        Pet's livelihood(2).: <?php echo $row['indoor_2']; ?><br>
                        Nmae(3).:  <?php echo $row['pet_name_3']; ?><br/>
                        Type/Breed(3).: <?php echo $row['pet_type_3']; ?><br>
                        Size(3).:  <?php echo $row['pet_size_3']; ?><br/>
                        Pet's livelihood(3).: <?php echo $row['indoor_3']; ?><br><br>
                        Date.:  <?php echo $row['app_date']; ?><br/>
                        Accepted/Refused.: <?php echo $row['deal']; ?><br>
                        By.:  <?php echo $row['deal_name']; ?><br/><br>
                        Prospective Tenant's Name.: <?php echo $row['tenant_name']; ?><br>
                        Position.:  <?php echo $row['tenant_pos']; ?><br/>
                        Wages/salary.: <?php echo $row['tenant_wage']; ?><br>
                        Per.:  <?php echo $row['tenant_per']; ?><br/>
                        Length of thime with the above employer.: <?php echo $row['tenant_dur']; ?><br>
                        </p>
                        </span>
                       
                      </div>
                    
                    </div>
                    <!-- /.post -->

                  </div>
                 
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <?php
  
  ?>
    <!-- /.content -->
  </div>
  
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
