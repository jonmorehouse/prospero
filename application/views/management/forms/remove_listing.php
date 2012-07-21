<div id='remove_listing'>
	<h1>Select a Listing to Remove</h1>
	<div>
		<?php
			foreach($this->property_id_list as $data['property_id']){
				$data['url'] = site_url('management/update_tools/remove_listing_prompt/' . $data['property_id']);
				$this->load->view('management/resources/thumbnail', $data);//CALLING THE THUMBNAIL TO BE CREATED FOR THE SELECTION!
			}
		?>
	</div>
</div>



