<center>
	<h2>about</h2>
	<form action="about.php" method="post" enctype="multipart/form-data">
		<table width="400">
			
			<tr><td>header1</td> <td><input type="text" name="header1"> </td></tr>
			<tr><td>header2</td> <td><input type="text" name="header2"> </td></tr>
			<tr><td>header3</td> <td><input type="text" name="header3"> </td></tr>
<!--adding image field-->
           <tr><td>image1</td>
           	<td><input type="file" name="userfile1"></td>
			
			</tr>
			
           	<tr><td>image2</td>
           	<td><input type="file" name="userfile2"></td></tr>
           	<tr><td>image3</td>
           	<td><input type="file" name="userfile3"></td></tr>


			<tr><td><input type="submit" name="update"></tr></td>
			<td><input type="reset" name="cancle"></td> </tr>
		</table>
	</form>

	<?php 		$url = 'http://'.$_SERVER['HTTP_HOST'].'/websiteprojects/consultancy/admin/';
	extract($_POST);
	include 'connection.php';
	if(isset($update))
	{

		
		$file    =    $_FILES['userfile1']['name'];  
		$tmpfile =    $_FILES['userfile1']['tmp_name'];
		move_uploaded_file($tmpfile,'uploads/'.$file);
		$query  = "UPDATE about SET
		header1 = '".$header1."',
		header2 = '".$header2."',
		header3 = '".$header3."', 
		image1  = '".$file."',
		image2  = '".$userfile2."',
		image3  = '".$userfile3."'"; 

       $result = mysqli_query($conn,$query);
       if($result)
       {
       	header('location:about.php');
       }else
	      {
		echo "not updated";
	       }
	}

	?>
	



	
	
	
	
	
