<article>
<div class=artheader>
	Add New Art
</div>
<div class="main">
  
 <form method="POST" enctype="multipart/form-data" action="imgUploadBackEnd.php">
	<table>
		
		<tr>
			<td>
				Choose File:
			</td>
			<td>
				<input type="file" name="imgArt" >
			</td>
		</tr>
		<tr>
			<td>
				Art header:
			</td>
			<td>
				<input type="text" name="img_header">
			</td>
		</tr>
		<tr>
			<td>
				
			</td>
			<td>
				<input type="submit" value="Add">
			</td>
		</tr>
		<tr>
			<td colspan="2" style="color:red;"> 
				<?php 
					if($notice=="success"){ echo "<h3>Added!</h3>";}
				 ?>
			</td>
		</tr>
	</table>
	</form>

</div>
</article>
