<div id='media_upload'>
<h1>Upload Property Image</h1>

	<form action='<?php echo site_url('management/media_upload/image_upload/' . $this->property_id);?>' method='post' enctype='multipart/form-data'>

			<input type="file" name="image" /> 
		
			<input type="submit" name="submit" value="Submit" />
	</form>
</div>