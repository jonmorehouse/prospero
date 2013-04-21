<?php
	// initialize our basic tool_base page for this element
	$this->load->view('site_wide/tool_base');
?>

<!-- initialize our angular app -->
<div ng-view>

</div>



</div>


<?php
	$this->load->view('site_wide/javascript_module_loader');
	$this->load->view('site_wide/footer');
?>