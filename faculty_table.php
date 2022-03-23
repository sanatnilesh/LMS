<?php
  session_start();
  if (isset($_SESSION['username'])) {
      include('header.html');
      include('faculty_side.html');
      include('/includes/db_connection.php');
      include('/includes/functions.php');
?>
<section id="main-content">
          <section class="wrapper">
<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                        <?php
                          //include_once("/includes/db_connection.php");
                          $username = $_SESSION['username'];
                          
                          $query = "SELECT f_id FROM faculty WHERE email = '$username'";

                          $result = mysqli_query($connection,$query);
                          if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                             $id = $row['f_id'];                             
                           }  
                          }
                           
                           //echo $id;
                          $q1="SELECT * FROM bookissue WHERE id ='$id'";
                          $result = mysqli_query($connection,$q1);
                          if (mysqli_num_rows($result) > 0) {
                              while ($row = mysqli_fetch_assoc($result)) {
                             $id = $row['id'];
                             $book1 = $row['book1'];
                             $book2 = $row['book2'];
                             $book3 = $row['book3'];
                             $date = $row['date'];
                           }  
                          }else{
                            $id = '';
                             $book1 = '';
                             $book2 = '';
                             $book3 = '';
                             $date = '';
                          }
                          
                          ?>
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Issued Books</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>Book 1</th>
                                  <th>Book 2</th>
                                  <th>Book 3</th>
                                  <th>Issued Date</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                                
                              <tr>
                                  <td><?php echo $id; ?></td>
                                  <td><?php echo $book1; ?></td>
                                  <td><?php if($book2 == 'NULL'){ echo "---";} else {echo $book2;} ?></td>
                                  <td><?php if($book3 == 'NULL'){ echo "---";} else {echo $book3;} ?></td>
                                  <td><?php echo $date; ?></td>
                              </tr>
                                                           
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
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
<?php }else{
  header('Location: index.php');
}?>