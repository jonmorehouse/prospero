<form class='rent'><!--WATCH THIS WITH THE FORM PIECE-COULD BE PROBLEMATIC ON SELECTEING-->

<h2>Rent Specific Information</h2>

	<h3>Property Rent Per Month</h3><br />
		<input type="text" name="rent_price" value='<?php $this->property_get->rent_price($this->property_id);?>' /><br />
	<h3>Property Units Available</h3><br />
		<input type="text" name="rent_units_available" value='<?php $this->property_get->rent_units_available($this->property_id);?>' /><br />
</form>
