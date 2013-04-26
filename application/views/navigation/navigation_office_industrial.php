<div id='navigation_browse'>
	<li><a href='<? echo site_url();?>'>Home</a></li> 
	
	<li>Type
		<ul>
			<li><a href='<?php echo site_url("browse/{$this->id}/type/rent");?>'>Rent</a></li>
			<li><a href='<?php echo site_url("browse/{$this->id}/type/buy");?>'>Buy</a></li>
		</ul>
	</li>
	
	<li>Location
		<ul>
			<li><a href='<?php echo site_url("browse/{$this->id}/location_category/vancouver");?>'>Vancouver</a></li>
			<li><a href='<?php echo site_url("browse/{$this->id}/location_category/richmond");?>'>Richmond</a></li>
			<li><a href='<?php echo site_url("browse/{$this->id}/location_category/burnaby");?>'>Burnaby</a></li>
		</ul>
	</li>
	
	<li><a href='<?php echo site_url("browse/{$this->id}/all");?>'>All</a></li>
</div>


 
