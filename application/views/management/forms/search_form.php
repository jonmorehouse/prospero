<div id='search_form'>
<?php
	foreach($this->categories as $id){//for each of the categories that has values for this particular user...

		echo "<h1>{$this->browse->browse_header($id)}</h1>";//need to create the header!

		echo "<div>";//create the container
		foreach($this->$id as $data['property_id']){
			$data['url'] = site_url('management/update_tools/' . $this->tool_id . '/' . $data['property_id']);
			$this->load->view('management/resources/thumbnail', $data);
		}
		
		echo "</div>";
	}//end of $this->categories for each loop
?>
<div>