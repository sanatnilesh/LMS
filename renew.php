<?php
  session_start();
  if (isset($_SESSION['username'])) {
      include('header.html');
      include('adminside.html');
      include('/includes/db_connection.php');
?>      
<section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                        <?php
                          include_once("/includes/db_connection.php");
                          $q1="select s.id,s.book1,s.book2,s.book3,s.date from bookissue s";
                          $e1=$connection->query($q1);
                          ?>
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Return Book</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Book 1</th>
                                  <th>Book 2</th>
                                  <th>Book 3</th>
                                  <th>Date</th>
                                  <th>Status</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php
                                  while($r=$e1->fetch_object()){
                                ?>
                              <tr>
                                  <td><?php echo $r->id; ?></td>
                                  <td><?php echo $r->book1; ?></td>
                                  <td><?php echo $r->book2; ?></td>
                                  <td><?php echo $r->book3; ?></td>
                                  <td><?php echo $r->date; ?></td>
                                                
                                  <td><span class="label label-info label-mini">Late</span></td>
                                  <td>
                                      <a href="deleteRecord.php?id=<?php echo $r->id; ?>">Delete</a>
                                  </td>
                              </tr>
                              <?php
                                  }
                                ?> 
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
