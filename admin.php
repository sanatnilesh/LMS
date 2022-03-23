<?php
  session_start();
  if (isset($_SESSION['username'])) {
      include('header.html');
      include('adminside.html');
      include('/includes/functions.php');
      //check_pages();
?>      
<section id="main-content" style="margin-left:30%;">
        <section class="wrapper">
          <div class="row">
            <div class="col-lg-9 main-chart">
              <div class="row mt">
                <div class="col-md-4 col-sm-4 mb">
                  <div class="white-panel pn donut-chart">
                    <div class="white-header">
                      <h5>TOTAL BOOKS</h5>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-xs-6 goleft">
                        <p><i class="fa fa-database"></i> 100%</p>
                      </div>
                    </div>
                    <div class="centered" >
                      <img src="assets/img/totalbook.jpg" width="160" >
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-4 mb">
                  <div class="white-panel pn">
                    <div class="white-header">
                      <h5>ISSUED BOOKS</h5>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-xs-6 goleft">
                        <p><i class="fa fa-database"></i> 50%</p>
                      </div>
                      <div class="col-sm-6 col-xs-6"></div>
                    </div>
                    <div class="centered">
                      <img src="assets/img/issue.jpg"  width="180" height="140">
                    </div>
                  </div>
                </div>

                <div class="col-md-4 mb">
                  <div class="white-panel pn">
                    <div class="white-header">
                      <h5>REGISTERED USER</h5>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-xs-6 goleft">
                        <p><i class="fa fa-database"></i> 50%</p>
                      </div>
                      <div class="col-sm-6 col-xs-6"></div>
                    </div>
                    <p><img src="assets/img/user.jpg" class="img-circle" width="110" style="margin-right:10%;"></p>
                    
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-md-4 col-sm-4 mb">
                  <div class="white-panel pn">
                    <div class="white-header">
						  			<h5>PUBLISHER</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										<p><i class="fa fa-heart"></i> 85</p>
									</div>
									<div class="col-sm-6 col-xs-6"></div>
	                      		</div>
	                      		<div class="centered">
										<img src="assets/img/publisher.jpg" width="120">
	                      		</div>
                      		</div>
                      	</div>
                      	
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn">
                      			<div class="white-header">
						  			<h5>SUPPLIER</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										<p><i class="fa fa-heart"></i> 90</p>
									</div>
									<div class="col-sm-6 col-xs-6"></div>
	                      		</div>
	                      		<div class="centered">
										<img src="assets/img/supplier.jpg" width="140">
	                      		</div>
                      		</div>
                      	</div>
                      	
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn">
                      			<div class="white-header">
						  			         <h5>CATEGORIES</h5>
                      			</div>
            								<div class="row">
            									<div class="col-sm-6 col-xs-6 goleft">
            										<p><i class="fa fa-heart"></i> 95</p>
            									</div>
            									<div class="col-sm-6 col-xs-6"></div>
            	            		</div>
	                      		<div class="centered">
										        <img src="assets/img/category.jpg" width="120">
	                      		</div>
                      		</div>
                      	</div>
                      	
					</div><!-- /row -->
					
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
          </section>
      </section>
    
<script src="assets/js/jquery.js"></script>
	<script src="assets/js/jquery-1.8.3.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
	<script src="assets/js/jquery.scrollTo.min.js"></script>
	<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
	<script src="assets/js/jquery.sparkline.js"></script>


	<!--common script for all pages-->
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