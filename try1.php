<?php
  session_start();
   $x=$_SESSION['email'];
   $y=$_SESSION['UserID'];
$link = mysqli_connect('sql105.epizy.com','epiz_20780607','ahrgsZmpNa','epiz_20780607_zero');

if (mysqli_connect_error()) {
die("Could not connect to database");
}
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
 <head>
    <meta charset="utf-8">
    <title>mailBOX</title>
      <link type="text/css" rel="stylesheet" href="sendsty.css">
  <link type="text/css" rel="stylesheet" href="navsty.css">

    </head>
 <body>
 	
<header>

    <a href="login.php" id="logo">
                     <img src="rezero.png" height="55px" width=" 80px">
                </a>
  
  <nav>
    <ul>  
      <li><a href="try1.php">INBOX</a></li>
      <li><a href="send.php">SEND</a></li>
      <li><a href="logoutproc.php">LOGOUT</a></li>
 
    </ul>
  </nav>
</header>

  <?php

if(isset($_GET['messsage'])){
$id = $_GET['messsage'];

$query = "UPDATE message SET flag =1 WHERE ID ='$id' ";
$result=mysqli_query($link, $query);

$query = "SELECT * FROM message WHERE ID ='$id' ";
$result=mysqli_query($link, $query);

//$mes = mysql_query("SELECT * FROM message WHERE ID ='$id'");
$row=mysqli_fetch_array($result);
$from = $row["M_From"];
$subject = $row["M_Subject"];
$message = $row["Message"];
$time = $row["TimeStamp"];
?>


<div class="wrap">
 
<table class="form1">
 <tr>
       <td> from   <br> <?php echo $from;    ?></td>
       <td> subject<br> <?php echo $subject; ?></td>
       <td> time   <br> <?php echo $time;    ?></td>
 </tr>
</table>
<pre> <?php echo $message; ?></pre><br><br>
<table  class="form1"> 
<tr>
<th>
<a href="?delete=<?php echo $id ?> ">  Delete Message</a>
</th>
<th>
  
  </th>
<th>
 <a href="try1.php">  back to inbox</a>

</th>
</tr>
</table>

</div>

<?php exit();} ?>


<?php
if(isset($_GET['delete'])){
	$id = $_GET['delete'];

$delete = "DELETE FROM message WHERE ID ='$id' ";
$result=mysqli_query($link, $delete);
if($result)
{
    	header( "Refresh:2; url=try1.php" );
}	else{
die("please refresh again");
}

exit();
	}
?>
  
 
      
  
<div  id= "back" class="wrap">
	<form action="" method="post">
<?php


echo '<table class="form1">
       <tr>
       <th>case</th>        
       <th>from</th>
       <th>subject</th>
       <th>id</th>
       
       </tr>';
    //   $query = mysql_query("SELECT * FROM message WHERE M_To='$x' ");{


$query = "SELECT * FROM message WHERE UserID='$y' ";
if ($result=mysqli_query($link, $query)) {

  while($row=mysqli_fetch_array($result)){
if($row["flag"] == 0 ){ $open = "not open";}
else { $open = "open";}  	
$from = $row["M_From"];
$subject = $row["M_Subject"];
$message = $row["Message"];
$id= $row["ID"];
       echo ' <tr>';
       echo ' <td><a href="?messsage='.$id.'"> '.$open.'</a></td>';
       echo ' <td><a href="?messsage='.$id.'"> '.$from.'</a></td>';
       echo ' <td><a href="?messsage='.$id.'">'.$subject.'</a></td>';
       echo ' <td><a href="?messsage='.$id.'">'.$id.' </a></td>'; 
       echo ' </tr>';
}
echo '</table>';
}
 else {
echo "It failed";
}

?>
</form>
</div>

</body>
</html>
