<center>
<h2>slider 3 page</h2>
<form action = 'slider3.php' method = 'post'>
<table width="400">

    
<tr><td>content1</td> <td><input type = 'text' name = 'con1'></td></tr>

<tr><td>content2</td> <td><textarea cols = '15' rows = '2' name = 'con2'></textarea></td></tr>

<tr><td>content3</td><td><textarea cols = '15' rows = '2' name = 'con3'></textarea></td></tr>
<tr><td>content4</td><td><textarea cols = '15' rows = '2' name = 'con4'></textarea></td></tr>
<tr><td>content5</td><td><textarea cols = '15' rows = '2' name = 'con5'></textarea></td></tr>
<tr><td>content6</td><td><textarea cols = '15' rows = '2' name = 'con6'></textarea></td></tr>

<tr><td><input type = 'submit' value = 'send' name ='update'></td> 
<td><input type = 'reset' value = 'cancel'></td> </tr>
</table>
</form>


<?php
extract($_POST);
include 'connection.php';
if(isset($update))
{	
 
   $query = "UPDATE slider3 SET 
                     con1 = '".$con1."',
	                 con2 = '".$con2."',
	                 con3 = '".$con3."',
	                 con4 = '".$con4."',
	                 con5 = '".$con5."',
	                 con6 = '".$con6."' "; 
                
	$result = mysqli_query($conn,$query);
	if($result)
	{
		header('Location:slider3.php');
	}else
	{
		echo "not update";
	}
}
?>

