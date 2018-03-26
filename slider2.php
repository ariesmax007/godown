<center>
<h2>slider 2 page</h2>
<form action = 'slider2.php' method = 'post'>
<table width="400">

    
<tr><td>content1</td> <td><input type = 'text' name = 'cont1'></td></tr>

<tr><td>content2</td> <td><textarea cols = '15' rows = '2' name = 'cont2'></textarea></td></tr>

<tr><td>content3</td><td><textarea cols = '15' rows = '2' name = 'cont3'></textarea></td></tr>
<tr><td>content4</td><td><textarea cols = '15' rows = '2' name = 'cont4'></textarea></td></tr>
<tr><td>content5</td><td><textarea cols = '15' rows = '2' name = 'cont5'></textarea></td></tr>
<tr><td>content6</td><td><textarea cols = '15' rows = '2' name = 'cont6'></textarea></td></tr>

<tr><td><input type = 'submit' value = 'send' name ='update'></td> 
<td><input type = 'reset' value = 'cancel'></td> </tr>
</table>
</form>


<?php
extract($_POST);
include 'connection.php';
if(isset($update))
{	
 
  $query = "UPDATE slider2 SET 
                     cont1 = '".$cont1."',
	                 cont2 = '".$cont2."',
	                 cont3 = '".$cont3."',
	                 cont4 = '".$cont4."',
	                 cont5 = '".$cont5."',
	                 cont6 = '".$cont6."' "; 
                
	$result = mysqli_query($conn,$query);
	if($result)
	{
		header('Location:slider2.php');
	}else
	{
		echo "not update";
	}
}
?>

