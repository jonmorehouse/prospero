<form class='buy'>
<h1>Buy Specific Information</h1>
	<h3>Property Price</h3><br />
		<input type="text" name="buy_price" value='<?php $this->property_get->buy_price($this->property_id);?>' /><br />
	<h3>Property Units Available</h3><br />
		<input type="text" name="buy_list_date" value='<?php $this->property_get->buy_list_date($this->property_id);?>' /><br />
</form>