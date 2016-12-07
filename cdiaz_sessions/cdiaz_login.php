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
        
          <form class="form-horizontal" role="form" action="form_login.php" method="GET">

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
	  
	  <?php 
	  
		session_start();
      
          $mysql = mysql_connect('localhost','root','');
          if(!$mysql || $mysql->connect_errno){
            die("<h2>Error connecting to database</h2>");
          }

          mysql_select_db("usuarios", $mysqli);
          
          $name = $_REQUEST["name"];
          $pwd = $mysql->real_escape_string($_REQUEST["pwd"]);
          $query = "SELECT COUNT(*) AS pass FROM users WHERE name='$name' AND password='$pwd';";

          $result = $mysql->query($query);
          
    

        # mysql_select_db('bdlogin')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

        if(!empty($_POST)){
            $usuario = $_POST["user"];   
            $password = $_POST["password"];
            $name = $mysqlconect;
            $pwd = $_GET['password'];
            if ($usuario == $name && $password == $name){
                header("Location: Wellcome.php");
                die('redirected');
            }else{
                header("Location: cdiaz_login.php");
                die('redirected_1');
            }
         }
      ?>
	  
    </div>

  </body>
</html>
