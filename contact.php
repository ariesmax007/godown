<center>
<h2>contact page</h2>
<form action = 'contact.php' method = 'post'>
<table width="400">


<tr><td>Image</td> <td><input type = 'file'></td></tr>
<tr><td>Title</td> <td><input type = 'text' name = 'title'></td></tr>
<tr><td>google map</td> <td><textarea cols = '15' rows = '2' name = 'googlemap'></textarea></td></tr>
<tr><td>Address</td> <td><textarea cols = '15' rows = '2' name = 'address'></textarea></td></tr>
<tr><td><input type = 'submit' value = 'send' name ='update'></td> 
<td><input type = 'reset' value = 'cancel'></td> </tr>
</table>
</form>


<?php
extract($_POST);
include 'connection.php';
if(isset($update))
{
	$query = "UPDATE contact SET title = '".$title."', google_map = '".$googlemap."' , address = '".$address."' ";
	$result = mysqli_query($conn,$query);
	if($result)
	{
		header('Location:contact.php');
	}else
	{
		echo "not update";
	}
}
?>

