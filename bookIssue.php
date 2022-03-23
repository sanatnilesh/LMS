<?php
  session_start();
  if (isset($_SESSION['username'])) {
      include('header.html');
      include('adminside.html');
      include('/includes/db_connection.php');
?>      
<?php
  if(isset($_POST['submit'])){
    $num_cat = '';  
    $id = mysqli_real_escape_string($connection,$_POST['s_id']);
    if(preg_match('/^[1-9]{2}IT[0-9]{3}/',$id)){
        $num_cat = 1;
    }
    if(preg_match('/^T[0-9]{3}/',$id)){
        $num_cat = 3;
    }
      $date = date("Y-m-h");

    if($num_cat == 1){
        $bookno1 = mysqli_real_escape_string($connection,$_POST['book1']);
        $que1 = mysqli_query($connection,"SELECT * FROM bookissue WHERE id='$id'");
        $count = 0;
        $count=mysqli_num_rows($que1);
        if($count == 0){
            $q1="INSERT INTO bookissue (id,book1,book2,book3,date) VALUES ('$id','$bookno1','NULL','NULL','$date')";
     if (!mysqli_query($connection,$q1)) {
       echo "<script>alert('You have already issued a books') </script>";
    }else{
        echo "<script>alert('Books are issued successfully') </script>";
    }   
    }
    }
      if($num_cat == 3){
        $bookno1 = mysqli_real_escape_string($connection,$_POST['book1']);
        $bookno2 = mysqli_real_escape_string($connection,$_POST['book2']);
        $bookno3 = mysqli_real_escape_string($connection,$_POST['book3']);
        
        $bookno1 = mysqli_real_escape_string($connection,$_POST['book1']);
        $que1 = mysqli_query($connection,"SELECT * FROM bookissue WHERE id='$id'");
        $count = 0;
        $count=mysqli_num_rows($que1);
        if($count != 3){
            $q1="INSERT INTO bookissue (id,book1,book2,book3,date) VALUES ('$id','$bookno1','$bookno2','$bookno3','$date')";
            if (!mysqli_query($connection,$q1)) {
       echo "<script>alert('You have already issued a books') </script>";
    }else{
        echo "<script>alert('Books are issued successfully') </script>";
    }
        
    } 
      }
      if(!$q1){
      	echo "<script>alert('You have already issued a books') </script>";
      }

}
?>


<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Issue Books</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel" style="margin:200px; margin-top:10px;">
                  	  <h1 class="mb"><center> Issue Books</center></h1>
                  	  			<!--	<h4>  -->

                      <form class="form-horizontal style-form" method="post">
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">ID </label>
                            <div class="col-sm-10" style="margin-bottom: 10px;">
                                  <input type="text" name="s_id" id="userId" required="required" class="form-control">
                            </div>
                            
                            
                          <br>
                          <div id="catList" class="col-sm-10" style="margin-left: 10px; width: 98%;"></div>                                                        <div id="catList2" class="col-sm-10" style="margin-left: 10px; width: 98%;"></div>  


                            <button type="submit" name="submit" style="margin-bottom:10px; width: 96%; margin-left:15px;" class="btn btn-success btn-lg btn-block">Add</button></td>
            </div>  
                </div>
              </div>
            </div>
            
    </section>
      </section>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" ></script>
    <script type="text/javascript">
        $(document).ready(function() {  
            $('#userId').change(function(){
                var num;
                var x = $('#userId').val();
                var exp1='^[1-9]{2}IT[0-9]{3}';
                var exp2='^T[0-9]{3}';
                if(x.match(exp1)){
                    num = 1;
                }
                else if(x.match(exp2)){
                    num = 3;
                }
                else{
                    alert("Invalid ID.");
                }

                var i = 0; 
                var html = ''; 

                
                for (i=1;i<=num;i++) {
                    html += 'Book No ' + i + ': <input type="text" class="form-control" name="book' + i + '"/><br/>';
                    
                    
                }
                $('#catList').html(html);
                
            });
        }); 
 
        $(function(){
              $('select.styled').customSelect();
        });

      </script>
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
