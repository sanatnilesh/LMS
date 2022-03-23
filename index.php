<?php 
	session_start();
	require("/includes/db_connection.php"); 
?>
<?php 
	
	if(isset($_POST['submit'])){

		$username = mysqli_real_escape_string($connection,$_POST['username']);
		$password = mysqli_real_escape_string($connection,$_POST['password']);
		
		$query = "SELECT utype FROM login where username='$username' && password='$password'"; 
		$utype = mysqli_query($connection,$query);
		
		if (mysqli_num_rows($utype) == 0){
			echo "<script>alert('Incorrect Username/Password');</script>";
		}else{
			$_SESSION['username'] = $username;
		}

		while ($row = $utype->fetch_assoc()) {
    		
    		if($row['utype'] == "admin"){
    			
    			if (isset($_SESSION['username'])) {
    				header("Location: admin.php");
    			}
			}
			elseif($row['utype'] == "faculty"){
				
				if (isset($_SESSION['username'])) {
    				header("Location: faculty.php");
    			}
			}
			elseif($row['utype'] == "student"){
				
				if (isset($_SESSION['username'])) {
    				header("Location: student.php");
    			}
			} else {
				echo "<script>alert('👎Incorrect Username/Password👎');</script>";
			}
		}
	}
?>
<?php
if(isset($_POST['search_submit'])){
    $searchq = mysqli_real_escape_string($connection,$_POST['search']);
    
    
    $que=mysqli_query($connection,"SELECT * FROM book WHERE title = '$searchq' OR author = '$searchq' OR publisher = '$searchq'");
    $output='';
    $count=mysqli_num_rows($que);
    if($count == 0){
        $output.="👎Book is not Found👎.";
    }
    else{
        while($row=mysqli_fetch_array($que)){
            $booktitle=$row['title'];
            $author=$row['author'];
            $publisher=$row['publisher'];
            $output.='👍 '.$booktitle.' '.$author.' '.$publisher."is available";
                
        }
    }
    echo "<script>alert('$output')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta Http-Equiv="Cache-Control" Content="no-cache">
	<meta Http-Equiv="Pragma" Content="no-cache">
	<meta Http-Equiv="Expires" Content="0"> 
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<title>Library - IT Department</title>
    <link rel="icon" type="image/gif/png" href="assets/img/BVM.png">

    
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" /> 
    
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

  </head>
  <body>
	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="index.php" method="post">
		        <h2 class="form-login-heading">Sign in now</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" name="username" placeholder="User ID"  autocomplete="off" autofocus>
		            <br>
		            <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Password">
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="index.php#myModal"> Forgot Password?</a>
		                </span>
		            </label>
		            <input type="submit" name="submit" value="SIGN IN" class="btn btn-theme btn-block">
		        </form>
		            <hr>
		            <div class="registration">
		                   <h3>Check Availibility</h3>      
		            </div>
		            <br>
		            <div>
		            	<center>
		            		<form action="index.php" method="post">
		            			<input type="text" class="form-control" placeholder="Search.." name="search"><br>
						<input type="submit" name="search_submit" value="SEARCH" class="btn btn-theme btn-block">
		            		</form>
					</center>
					</div>
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <form class="form-login" action="sendmailfunction.php" method="post">
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <input type="reset" value="CLEAR" class="btn btn-theme">
		                          <input type="submit" name="email_submit" value="SUBMIT" class="btn btn-theme">
		                      </div>
		                  </form>
		                  </div>
		              </div>
		          </div>
	
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    
    
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

    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/background1.jpg", {speed: 500});
    </script>


  </body>
</html>