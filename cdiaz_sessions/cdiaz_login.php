<?php 
    
          session_start();
      
         $mysqli =  mysql_connect('localhost', 'root', '', 'usuarios');
          if (!$mysqli) {
              die('No pudo conectarse: ' . mysql_error());
          }
          echo 'Conectado satisfactoriamente';

           
          
          $name = ( array_key_exists( 'name', $_REQUEST) ? $_REQUEST['name'] : "" );
          $pwd = ( array_key_exists( 'pwd', $_REQUEST) ? $_REQUEST['pwd'] : "" );

          //debug

          echo '<br>';

          echo $name;

          echo '<br>';

          echo $pwd;

          $result = mysql_query("SELECT * FROM users WHERE username = '".$name.""AND "password = '".$pwd."");

          if (isset($_POST["name"])){
            if ($_POST["name"] == $name && $_POST["pwd"] == $pwd){
                header("Location: Wellcome.php");
                die('redirected');
          }else{
                header("Location: cdiaz_login.php");
                die('redirected_1');
          }
        }
         
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>cdiaz Sessions</title>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Scripts/jquery-2.1.4.min.js"</script>
	<script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
	<link href="Styles/bootstrap.min.css" rel="stylesheet">
    
  </head>
  <body>
	<!-- Jumbotron -->
        
    <div class="container">
      <div class="jumbotron text-center">
      	<h1>Login</h1>
      </div>
        
          <form class="form-horizontal" role="form" action="cdiaz_login.php" method="POST">

			<div class="form-group ">
			  <label class="control-label col-sm-3" for="username">User</label>
			  <div class="col-sm-6">
				<div class="input-group">
				  <span class="input-group-addon">
					<span class="glyphicon glyphicon-user"></span>
				  </span>
				  <input type="text" class="form-control" id="username" name="name"
				   placeholder="user name" value="">
				</div>
						  </div>
			</div>
			
				<div class="form-group">
			  <label class="control-label col-sm-3" for="pwd">Password</label>
			  <div class="col-sm-6">
				<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
			  </div>
			</div>

			<div class="form-group">
			  <div class="col-sm-3 col-sm-offset-3">
				<button type="submit" class="btn btn-success" style="width:100%;">Submit</button>
			  </div>
			</div>

      </form>
	  
    </div>

  </body>
</html>
