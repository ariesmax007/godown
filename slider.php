<center>
<h2>slider page</h2>
<form action = 'slider.php' method = 'post'>
<table width="400">

    
<tr><td>content1</td> <td><input type = 'text' name = 'content1'></td></tr>

<tr><td>content2</td> <td><textarea cols = '15' rows = '2' name = 'content2'></textarea></td></tr>

<tr><td>content3</td><td><textarea cols = '15' rows = '2' name = 'content3'></textarea></td></tr>
<tr><td>content4</td><td><textarea cols = '15' rows = '2' name = 'content4'></textarea></td></tr>
<tr><td>content5</td><td><textarea cols = '15' rows = '2' name = 'content5'></textarea></td></tr>
<tr><td>content6</td><td><textarea cols = '15' rows = '2' name = 'content6'></textarea></td></tr>

<tr><td><input type = 'submit' value = 'send' name ='update'></td> 
<td><input type = 'reset' value = 'cancel'></td> </tr>
</table>
</form>


<?php
extract($_POST);
include 'connection.php';
if(isset($update))
{	
 
   $query = "UPDATE slider SET 
                     content1 = '".$content1."',
	                 content2 = '".$content2."',
	                 content3 = '".$content3."',
	                 content4 = '".$content4."',
	                 content5 = '".$content5."',
	                 content6 = '".$content6."' "; 
                
	$result = mysqli_query($conn,$query);
	if($result)
	{
		header('Location:slider.php');
	}else
	{
		echo "not update";
	}
}
?>

