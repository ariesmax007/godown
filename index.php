<center>
<h2>home page</h2>
<form action = 'index.php' method = 'post'>
<table width="400">

    
<tr><td>menu_name</td> <td><input type = 'text' name = 'menu_name'></td></tr>

<tr><td>title</td> <td><textarea cols = '15' rows = '2' name = 'title'></textarea></td></tr>

<tr><td>section1</td><td><textarea cols = '15' rows = '2' name = 'address1'></textarea></td></tr>
<tr><td>section2</td><td><textarea cols = '15' rows = '2' name = 'address2'></textarea></td></tr>
<tr><td>section3</td><td><textarea cols = '15' rows = '2' name = 'address3'></textarea></td></tr>

<tr><td><input type = 'submit' value = 'send' name ='update'></td> 
<td><input type = 'reset' value = 'cancel'></td> </tr>
</table>
</form>


<?php
extract($_POST);
include 'connection.php';
if(isset($update))
{	
 
   $query = "UPDATE home SET menu_name = '".$menu_name."',
	                 title = '".$title."',
	                 section1='".$address1."',
	                 section2='".$address2."',
	                 section3='".$address3."' "; 

	$result = mysqli_query($conn,$query);
	if($result)
	{
		header('Location:index.php');
	}else
	{
		echo "not update";
	}
}
?>

