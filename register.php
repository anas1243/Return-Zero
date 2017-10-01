
<!DOCTYPE HTML>  
<html>
<head>
     
<title>RETURN_ZERO</title>
    <?php include 'register_proc.php';?>

	<link type="text/css" rel="stylesheet" href="registersty.css">
	<link type="text/css" rel="stylesheet" href="navsty.css">
  <style >
    .error {color: #FF0000;font-size: 20px;text-align: right;}
    .radio{font-size: 20px ;padding: 2px ;margin:2px ;float:left; }
  </style>
 


</head>

<body>

	

<header>

    <a href="login.php" id="logo">
                     <img src="rezero.png" height="55px" width=" 80px">
                </a>
  
  <nav>
    <ul>  
      <li><a href="home.php">Home</a></li>
      <li><a href="login.php">LOGIN</a></li>
      <li><a href="register.php">REGISTRATION</a></li>
 
    </ul>
  </nav>
</header>
<div class="wrap">
  REGISTERATION
  <br><br>

    
    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
	    
	    <span class="error"> <?php echo $DB_error; ?></span>
	<input placeholder="Name       ex:{joe}" name="Name" value="<?php echo $Name; ?>" type="text"    />
		<span class="error"> <?php echo $Name_error; ?></span>
    
		
		
		<input placeholder="Email       ex:{joe123@mail.com}" name="Email" value="<?php echo $Email; ?>" type="text"    />
		<span class="error"> <?php echo $Email_error;?></span>

		<input placeholder="Phone" name="Phone" value="<?php echo $Phone ;?>" type="text"    />
		<span class="error"> <?php echo $Phone_error;?></span>
		
		<div class='radio'>
		<table >
       <tr><th> gender</th>
       <th>
		<input type="radio"  name="Gender"  value="Male" checked="checked" /> Male 
      </th>
		<th>
		<input type="radio"  name="Gender"  value="Female" /> Female 
		</th>
		</tr>
		</table>
		</div>
		
    <span class="error"><?php echo $Gender_error;?></span>

		    <input placeholder="BirthDate       ex:{yyyy-mm-dd}" name="Date" value="<?php echo $Date; ?>" type="text"    />
        <span class="error"> <?php echo $Date_error;?></span>

        

        <input placeholder="Best school teacher name" name="M_Teacher" value="<?php echo $M_Teacher; ?>" type="text" id="Bstn"  />
        <span class="error"> <?php echo $M_Teacher_error;?> </span>

       

		<input placeholder="Password" name="Password"  type="password"     />
			
		<span class="error"> <?php echo $password_error; ?> </span>

        <input placeholder="RePassword" name="Repassword"  type="password"    />
        <span class="error"> <?php echo $Repassword_error; ?> </span>

  <button type="submit" data-submit="...Sending">REGISTER</button>
  
</form>
  
</div>
	</body>
</html>
