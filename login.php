<!--Allow communication with our server-->
<?php include('server.php') ?>

<!--Setup our HTML page-->

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="">
 
 <title>Login Example</title>
 
 <!-- Bootstrap core CSS-->
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <!-- Custom fonts for this template-->
 <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <!-- Custom styles for this template-->
 <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
 <div class="container">
   <div class="card card-login mx-auto mt-5">
     <div class="card-header">Login</div>
     <div class="card-body">
     
     <!--Accepts inputs as variables to query-->
       <form method="post" action="login.php">
       
       <!--Display Errors upon Failed Authentication-->
          <?php include('errors.php'); ?>
          
         <!--Username Input-->
         <div class="form-group">
           <label for="exusername">Username</label>
           <input class="form-control"  type="text" name="user">
         </div>
         
          <!--Password Input-->
         <div class="form-group">
           <label for="expassword">Password</label>
           <input class="form-control"  type="password" name="pass">
         </div>
         
         <!--Remember-->
         <div class="form-group">
           <div class="form-check">
             <label class="form-check-label">
               <input class="form-check-input" type="checkbox"> Remember Me </label>
           </div>
         </div>
         
          <!--Submit our information and query DB-->
         <button type="submit" class="btn btn-primary btn-block" name="login_user">Login</button>
         
       </form>
     </div>
   </div>
 </div>
 
 
 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- Core plugin JavaScript-->
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>
