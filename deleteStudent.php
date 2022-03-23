<?php
  session_start();
  if (isset($_SESSION['username'])) {
      include('header.html');
      include('adminside.html');
      include('/includes/db_connection.php');
      include('/includes/functions.php');
?>
<?php
    if(isset($_POST["delete"])){
    $s_id = mysqli_real_escape_string($connection,$_POST['s_id']);
    $q1="DELETE FROM student WHERE s_id='$s_id' ";
    if (!mysqli_query($connection,$q1)) {
        echo "<script>alert('Oops! try again') </script>";
      }
      else
      {
        echo "<script>alert('Student Record Is Deleted') </script>";
      }
}
?>


<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Delete Student</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel" style="margin:200px; margin-top:10px;">
                  	  <h1 class="mb"><center> Delete Student </center></h1>
                  	  			<!--	<h4>  -->
                          
                      <form class="form-horizontal style-form" method="POST">
                          <div class="form-group">
                           
                            <div class="col-sm-10" style="margin-bottom: 10px; width: 100%;">
                            <input type="text" placeholder="Student ID" name="s_id" required="required" class="form-control">
                            </div>

                            <button type="submit" name="delete" style="margin-bottom:10px; width: 96%; margin-left:15px;" class="btn btn-success btn-lg btn-block">Delete</button></td>
                         
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