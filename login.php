<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <title>RETURN_ZERO</title>
    <?php include 'login_proc.php';?>
	<link type="text/css" rel="stylesheet" href="loginsty.css">
	<link type="text/css" rel="stylesheet" href="navsty.css">
	
	<style >
    .error {color: #FF0000;font-size: 20px;text-align: right;}
  </style>

</head>

<body>
	
	
	
<header>

    <a href="login.php" id="logo">
                     <img src="rezero.png" height="55px" width=" 80px">
                </a>
  
  <nav>
    <ul>  
      <li><a href="index.php">Home</a></li>
      <li><a href="login.php">LOGIN</a></li>
      <li><a href="register.php">REGISTRATION</a></li>
 
    </ul>
  </nav>
</header>
<div class='wrap'>
  Login
  <br><br>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
    		<span class="error"> <?php echo $DB_error; ?></span>
    		
        <input name="Email" type="text" id="username" placeholder="Email">
        <span class="error"> <?php echo $Email_error; ?></span>
        
        <input name="Password" type="password" id="password" placeholder="Password">
        <span class="error"> <?php echo $Password_error; ?></span>
    
  
  
  <button type="submit" data-submit="...Sending" class="login">LOG IN</button>
  
 
	</form>
 <a href="forgetPass.php">FORGOT PASSWORD ?</a>
  </div>
	</body>
</html>
