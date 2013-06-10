<div id='media_upload'>
<h1>Upload Property Thumbnail Image</h1>

	<form action='<?php echo site_url('admin/management/media_upload/thumbnail_upload/' . $this->property_id);?>' method='post' enctype='multipart/form-data'>

			<input type="file" name="thumbnail" /> 
		
			<input type="submit" name="submit" value="Submit" />
	</form>
</div>