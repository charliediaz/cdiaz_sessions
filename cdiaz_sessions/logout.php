<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<title>Exercise Sessions</title>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Scripts/jquery-2.1.4.min.js"</script>
	<script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
	<link href="Styles/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">MySite</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	  <!-- navbar-site -->    
      <ul class="nav navbar-nav">
        <li><a href="#">Products<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Credits</a></li>
      </ul>
      <!-- navbar-user-login -->
   	  <ul class="nav navbar-nav navbar-right">
		<li><a href="cdiaz_login.php">Login</a></li>
	  </ul>

    </div><!-- /.navbar-collapse -->
  	</div><!-- /.container-fluid -->
	</nav>

	<!-- Jumbotron -->
        
    <div class="container">
      <div class="jumbotron text-center">  
	  
	  
	  
      	<h1>My Site</h1>
      	Site info
      </div>
	  
	  <?php 
	  
		session_start();
      
          // unset($_SESSION['ShoppingCart']); #delete shopping cart data
			$_SESSION = new Array();
			session_destroy();                #reset session
			
			if (ini_get("session.use_cookies")) {
			 $params = session_get_cookie_params();
			 setcookie(session_name(), false, 0,
				 $params["path"], $params["domain"],
				 $params["secure"], $params["httponly"]
			 );
		 }
      ?>
    </div>

  </body>
</html>