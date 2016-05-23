<article>
<div class="artheader">
   Books:
</div>
<div class="main">
<form method="POST" enctype="multipart/form-data" action="bookUploadBackEnd.php">
<table>
		
		<tr>
			<td>
				Choose Book(url):
			</td>
			<td>
				<input type="text" name="bookUrl"/>
			</td>
		</tr>
		<tr>
			<td>
				Choose Cover(jpg,png):
			</td>
			<td>
				<input type="file" name="cover" accept=".png, .jpg, .jpeg" />
			</td>
		</tr>
		<tr>
			<td>
				Name of cover:
			</td>
			<td>
				<input type="text" name="book_header">
			</td>
		</tr>
		<tr>
			<td> 
			    Description:
			</td>
			<td>
				<textarea name="description"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="color:red;"> 
				<?php 
					if($notice=="success"){ echo "<h3>Added!</h3>";}
				 ?>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Submit">
			</td>
		</tr>
	</table>
</form>
</div>
</article>