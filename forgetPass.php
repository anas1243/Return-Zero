<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <title>FuckMailBox</title>
    

    <?php include 'forgetpassprocess.php';?>
    
	<link type="text/css" rel="stylesheet" href="forgetpasssty.css">
	<link type="text/css" rel="stylesheet" href="navsty.css">
	
	
	
	

</head>

<body>

	
<div class='wrap'>
 FORGET PASSWORD
  <br><br>

    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
    
    		<span class="error"> <?php echo $DB_error; ?></span>
    		
        <input placeholder="Email       ex:{joe123@mail.com}" name="Email" value="<?php echo $Email; ?>" type="text"    />
        
        <span class="error"> <?php echo $Email_error;?></span>
        
        <button type="submit" data-submit="...Sending">SEND</button>
        
        
    
  
</form>
  </div>
	</body>
</html>
