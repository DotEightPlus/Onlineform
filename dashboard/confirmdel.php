<?php
include("../functions/init.php");
if(!isset($_SESSION['started'])) {
  header("location: ./login");
}
?>
<?php
$data = $_GET['id'];
$_SESSION["data"] = $data;
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
          
          <div>
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="./deleted">Delete this form</a></li>
                  
                  
                 
                </ul>
              </div><!-- /.card-header -->
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
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                         <?php echo date("d-m-y"); ?>
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-file bg-primary"></i>

                        <div class="timeline-item">
                        
                          <h3 class="timeline-header"><a href="#">Admission Letter</a></h3>

                          <div class="timeline-body">
                           Print Admission Letter, Click on the button below.
                          </div>
                          <div class="timeline-footer">
                            <?php echo'
                            <a target="_blank" href="adml.php?id='.$row['id'].'" class="btn btn-primary btn-sm">Print</a>';
                            ?>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                      
                          <h3 class="timeline-header border-0"><a href="#">QR Code</a> 
                          </h3>
                            <div class="timeline-footer">
                            <?php
                               $data = $row['AdminID'];
                                $pass = str_replace('/', '', $data);
                             echo'

                            <img src="upload/QRCard/'.$pass.'.png">';
                            ?>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-card bg-warning"></i>

                        <div class="timeline-item">
                        
                          <h3 class="timeline-header"><a href="#">ID Card</a></h3>

                          <div class="timeline-body">
                            <?php
                                $dat = $row['AdminID'];
                                $pas = str_replace('/', '', $dat);
                             echo'
                           <iframe style="border:none; width: 227px; height: 192px;" src="http://paradisemodelschool.com.ng/upload/IdCard/'.$pas.'.html"></iframe>
                          </div>
                          <div class="timeline-footer">
                            <a target="_blank" href="atcd.php?id='.$row['id'].'" class="btn btn-warning btn-flat btn-sm">Print ID Card</a>
                          </div>
                          ';
                           ?>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                     
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                     
                      <!-- END timeline item -->
                    
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
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
