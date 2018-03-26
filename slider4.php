<center>
<h2>slider 4 page</h2>
<form action = 'slider4.php' method = 'post'>
<table width="400">

    
<tr><td>content1</td> <td><input type = 'text' name = 'co1'></td></tr>

<tr><td>content2</td> <td><textarea cols = '15' rows = '2' name = 'co2'></textarea></td></tr>

<tr><td>content3</td><td><textarea cols = '15' rows = '2' name = 'co3'></textarea></td></tr>
<tr><td>content4</td><td><textarea cols = '15' rows = '2' name = 'co4'></textarea></td></tr>
<tr><td>content5</td><td><textarea cols = '15' rows = '2' name = 'co5'></textarea></td></tr>
<tr><td>content6</td><td><textarea cols = '15' rows = '2' name = 'co6'></textarea></td></tr>

<tr><td><input type = 'submit' value = 'send' name ='update'></td> 
<td><input type = 'reset' value = 'cancel'></td> </tr>
</table>
</form>


<?php
extract($_POST);
include 'connection.php';
if(isset($update))
{	
 
   $query = "UPDATE slider4 SET 
                     co1 = '".$co1."',
	                 co2 = '".$co2."',
	                 co3 = '".$co3."',
	                 co4 = '".$co4."',
	                 co5 = '".$co5."',
	                 co6 = '".$co6."' "; 
                
	$result = mysqli_query($conn,$query);
	if($result)
	{
		header('Location:slider4.php');
	}else
	{
		echo "not update";
	}
}
?>

