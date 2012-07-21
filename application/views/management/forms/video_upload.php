<div id='media_upload'>
<h1>Update New Listing</h1>

<form action='<?php echo site_url('management/media_upload/video_upload/' . $this->property_id);?>' method='post' enctype='multipart/form-data'>

		<input type="file" name="video" /> 
		
		<input type="submit" name="submit" value="Submit" />
</form>



</div>