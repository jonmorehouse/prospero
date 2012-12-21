<div id='navigation_browse'>
	<li><a href='<? echo site_url();?>'>Home</a></li> 
	
	<li>Type
		<ul>
			<li><a href='<?php echo site_url("property/{$this->id}/type/rent");?>'>Rent</a></li>
			<li><a href='<?php echo site_url("property/{$this->id}/type/buy");?>'>Buy</a></li>
		</ul>
	</li>
	
	<li>Rental Price
		<ul>
			<li><a href='<?php echo site_url("property/{$this->id}/rent_price/over_1000");?>'>Over $1000</a></li>
			<li><a href='<?php echo site_url("property/{$this->id}/rent_price/under_1000");?>'>Under $1000</a></li>
		</ul>
	</li>
	
	<li>Location
		<ul>
			<li><a href='<?php echo site_url("property/{$this->id}/location_category/okanagan_valley");?>'>Okanagan Valley: Kamloops and Kelowna</a></li>
			<li><a href='<?php echo site_url("property/{$this->id}/location_category/richmond_delta");?>'>Richmond/Delta</a></li>
			<li><a href='<?php echo site_url("property/{$this->id}/location_category/fraser_valley");?>'>Fraser Valley: Abbotsford, Mission</a></li>	
			<li><a href='<?php echo site_url("property/{$this->id}/location_category/squamish");?>'>Squamish</a></li>
			<li><a href='<?php echo site_url("property/{$this->id}/location_category/vancouver_island");?>'>Vancouver Island: Parksville</a></li>
			<li><a href='<?php echo site_url("property/{$this->id}/location_category/vancouver");?>'>Vancouver</a></li>
			<li><a href='<?php echo site_url("property/{$this->id}/location_category/burnaby");?>'>Burnaby</a></li>
			<li><a href='<?php echo site_url("property/{$this->id}/location_category/pitt_meadows");?>'>Pitt Meadows</a></li>
		</ul>
	</li>
	
	<li><a href='<?php echo site_url("property/{$this->id}/new");?>'>New</a></li>

	<li><a href='<?php echo site_url("property/{$this->id}/all");?>'>All</a></li>
</div>


 
 
