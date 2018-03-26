<center>
<h2>our services</h2>
<form action = 'ourservice.php' method = 'post'>
<table width="400">

    
<tr><td>content1</td> <td><input type = 'text' name = 'sec1'></td></tr>

<tr><td>content2</td> <td><textarea cols = '15' rows = '2' name = 'sec2'></textarea></td></tr>

<tr><td>content3</td><td><textarea cols = '15' rows = '2' name = 'sec3'></textarea></td></tr>
<tr><td>content4</td><td><textarea cols = '15' rows = '2' name = 'sec4'></textarea></td></tr>
<tr><td>content5</td><td><textarea cols = '15' rows = '2' name = 'sec5'></textarea></td></tr>
<tr><td>content6</td><td><textarea cols = '15' rows = '2' name = 'sec6'></textarea></td></tr>

<tr><td><input type = 'submit' value = 'send' name ='update'></td> 
<td><input type = 'reset' value = 'cancel'></td> </tr>
</table>
</form>


<?php
extract($_POST);
include 'connection.php';
if(isset($update))
{	
 
  $query = "UPDATE ourservice SET 
                     sec1 = '".$sec1."',
	                 sec2 = '".$sec2."',
	                 sec3 = '".$sec3."',
	                 sec4 = '".$sec4."',
	                 sec5 = '".$sec5."',
	                 sec6 = '".$sec6."' "; 
                
	$result = mysqli_query($conn,$query);
	if($result)
	{
		header('Location:ourservice.php');
	}else
	{
		echo "not update";
	}
}
?>

