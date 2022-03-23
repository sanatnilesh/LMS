<?php
	include('header.html');
	include('adminside.html');
?>

<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Add Books</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel" style="margin:200px; margin-top:10px;">
                  	  <h1 class="mb"><center> Form Elements</center></h1>
                  	  			<!--	<h4>  -->

                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Book ID</label>
                              <div class="col-sm-10" style="margin-bottom: 10px;">
                                  <input type="text" class="form-control">
                              </div>
    
                              <label class="col-sm-2 col-sm-2 control-label">Title</label>
                              <div class="col-sm-10" style="margin-bottom: 10px;">
                                  <input type="text" class="form-control">
                              </div>

                              <label class="col-sm-2 col-sm-2 control-label">Author</label>
		                        <select class="form-control" >
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>


                              <label class="col-sm-2 col-sm-2 control-label">Publisher</label>
		                        <select class="form-control" style="margin-bottom:10px; width: 78.9%; margin-left:140px;">
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>

							<label class="col-sm-2 col-sm-2 control-label">Edition</label>
                              <div class="col-sm-10" style="margin-bottom: 10px;">
                                  <input type="text" class="form-control">
                              </div>

                              <label class="col-sm-2 col-sm-2 control-label">Volume</label>
		                        <select class="form-control" style="margin-bottom:10px; width: 78.9%; margin-left:140px;">
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>


                              <label class="col-sm-2 col-sm-2 control-label">Supplier</label>
		                        <select class="form-control" style="margin-bottom:10px; width: 78.9%; margin-left:140px;">
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>


                              <label class="col-sm-2 col-sm-2 control-label">Book Type</label>
		                        <select class="form-control" style="margin-bottom:10px; width: 78.9%; margin-left:140px;">
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>

								<label class="col-sm-2 col-sm-2 control-label">Category</label>
		                        <select class="form-control" style="margin-bottom:10px; width: 78.9%; margin-left:140px;">
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>

                             <label class="col-sm-2 col-sm-2 control-label">Edition</label>
                              <div class="col-sm-10" style="margin-bottom: 10px;">
                                  <input type="text" class="form-control">
                              </div>
                              <label class="col-sm-2 col-sm-2 control-label">Pages</label>
                              <div class="col-sm-10" style="margin-bottom: 10px;">
                                  <input type="text" class="form-control">
                              </div>
                              <label class="col-sm-2 col-sm-2 control-label">Price</label>
                              <div class="col-sm-10" style="margin-bottom: 10px;">
                                  <input type="text" class="form-control">
                              </div>
                              
                              	<button type="button"style="margin-bottom:10px; width: 96%; margin-left:15px;" class="btn btn-success btn-lg btn-block">ADD</button>
		                   	
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

<?php
	include('footer.html');
?>
<script>
 
        $(function(){
              $('select.styled').customSelect();
          });
      </script>
    </body>
  </html>