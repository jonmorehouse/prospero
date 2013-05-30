<div id='navigation_browse'>
	<li><a href='<? echo site_url();?>'>Home</a></li> 
	
	<li>Type
		<ul>
			<li><a href='<?php echo site_url("browse/{$this->id}/type/rent");?>'>Rent</a></li>
			<li><a href='<?php echo site_url("browse/{$this->id}/type/buy");?>'>Buy</a></li>
		</ul>
	</li>
	
<!-- 	<li>Rental Price
		<ul>
			<li><a href='<?php echo site_url("browse/{$this->id}/rent_price/over_1000");?>'>Over $1000</a></li>
			<li><a href='<?php echo site_url("browse/{$this->id}/rent_price/under_1000");?>'>Under $1000</a></li>
		</ul>
	</li> -->
	
	
	<li>Location
		<ul>
			<li><a href='<?php echo site_url("browse/{$this->id}/location_category/vancouver_island");?>'>Vancouver Island</a></li>
			<li><a href='<?php echo site_url("browse/{$this->id}/location_category/north_shore");?>'>North Shore: West and North</a></li>
			<li><a href='<?php echo site_url("browse/{$this->id}/location_category/downtown_west_end");?>'>Downtown/West End</a></li>
			<li><a href='<?php echo site_url("browse/{$this->id}/location_category/kitsilano_kerrisdale");?>'>Kitsilano/ Kerrisdale</a></li>
			<li><a href='<?php echo site_url("browse/{$this->id}/location_category/burnaby");?>'>Burnaby</a></li>
			<li><a href='<?php echo site_url("browse/{$this->id}/location_category/surrey_new_westminster");?>'>Surrey/New Westminster</a></li>
			<li><a href='<?php echo site_url("browse/{$this->id}/location_category/tri_cities");?>'>Tri-Cities: Coquitlam, Port Moody</a></li>
			<li><a href='<?php echo site_url("browse/{$this->id}/location_category/fraser_valley");?>'>Fraser Valley: Chilliwack</a></li>
		</ul>
	</li>
	
	<li><a href='<?php echo site_url("browse/{$this->id}/all");?>'>All</a></li>
</div>


