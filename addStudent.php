<?php
  session_start();
  if (isset($_SESSION['username'])) {
      include('header.html');
      include('adminside.html');
      include('/includes/db_connection.php');
      include('/includes/functions.php');
?>
<?php
  if(isset($_POST['submit'])){
    
    $s_id = mysqli_real_escape_string($connection,$_POST['s_id']);
    $name = mysqli_real_escape_string($connection,$_POST['name']);
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $mobile = mysqli_real_escape_string($connection,$_POST['mob']);
    $address = mysqli_real_escape_string($connection,$_POST['address']);
    $semester = mysqli_real_escape_string($connection,$_POST['semester']);
    
    $q1="INSERT INTO student (s_id,name,email,mobile,address,semester) VALUES ('$s_id','$name','$email','$mobile','$address','$semester')";
    if (!mysqli_query($connection,$q1)) {
        echo "<script>alert('Data Not Added') </script>";
    } else {
      new_user_added_mail($email);
      $q2="INSERT INTO login (username,password,utype) VALUES ('$email','$email','student')";
      if (mysqli_query($connection,$q2)) {
        echo "<script>alert('Student added') </script>";
      }

    }
    
  }
?>
<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Add Student</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel" style="margin:200px; margin-top:10px;">
                  	  <h1 class="mb"><center> Add Student</center></h1>
                  	  			<!--	<h4>  -->

                      <form class="form-horizontal style-form" method="post">
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Student ID</label>
                            <div class="col-sm-10" style="margin-bottom: 10px;">
                                  <input type="text" name="s_id" required="required" class="form-control">
                            </div>

                            <label class="col-sm-2 col-sm-2 control-label">Name</label>
                            <div class="col-sm-10" style="margin-bottom: 10px;">
                                  <input type="text" name="name" required="required" class="form-control">
                            </div>


                             <label class="col-sm-2 col-sm-2 control-label">Email</label>
                             <div class="col-sm-10" style="margin-bottom: 10px;">
                                  <input type="email" name="email" required="required" class="form-control">
                              </div>

                             <label class="col-sm-2 col-sm-2 control-label">Mobile No</label>
                             <div class="col-sm-10" style="margin-bottom: 10px;">
                                  <input type="text" name="mob" pattern="[6-9]{1}[0-9]{9}" required="required" class="form-control">
                              </div>

                              <label class="col-sm-2 col-sm-2 control-label">Address</label>
                              <div class="col-sm-10" style="margin-bottom: 10px;">
                                  <input type="text" name="address" required="required" class="form-control">
                              </div>

                              <label class="col-sm-2 col-sm-2 control-label">Semester</label>
                              <select class="form-control" name="semester" style="margin-bottom:10px; width: 78.9%; margin-left:140px;">
                                <option >choose option</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                              </select>

                            <button type="submit" name="submit" style="margin-bottom:10px; width: 96%; margin-left:15px;" class="btn btn-success btn-lg btn-block">Add</button></td>
            </div>  
                </div><!-- /form-panel -->
              </div><!-- /col-lg-12 -->
            </div>
            
    </section>
      </section>
      <script src="assets/js/jquery.js"></script>
  <script src="assets/js/jquery-1.8.3.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="assets/js/jquery.scrollTo.min.js"></script>
  <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="assets/js/jquery.sparkline.js"></script>

      <script src="assets/js/common-scripts.js"></script>

  <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

<script>
 
        $(function(){
              $('select.styled').customSelect();
          });
      </script>
      <?php }else{
  header('Location: index.php');
}?>
    </body>
  </html>