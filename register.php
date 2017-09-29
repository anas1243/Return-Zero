
<!DOCTYPE HTML>  
<html>
<head>
     
    <title>FuckMailBox</title>
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
   <a id="logo" href="#">OP</a>
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
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
		
		<div class="radio">
		<input type="radio"  name="Gender"  value="Male" checked="checked" /> Male 

		<br>
		<input type="radio"  name="Gender"  value="Female" /> Female 
		</div>
		
    <span class="error"><?php echo $Gender_error;?></span>
    		Select date:
<select name="day">
<?php 
for($i=1;$i<=31;$i++)
{
    echo '<option value='.$i.'>'.$i.'</option>';
}
?>
</select>
<select name="month">
<option value="January">January</option>
<option value="February">February</option>
<option value="Mars">Mars</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>

<select name="year">
<?php
for($i=1905;$i<=2015;$i++)
{
    echo '<option value='.$i.'>'.$i.'</option>';
}

?>
</select>


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
