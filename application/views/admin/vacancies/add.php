<div id='add_vacancy'>
	<h1>Add Vacancy</h1>

	<div class='header'>

		<span><img src='<?php echo $this->data['image']['url'];?>' /></span>
		<span><h3><?php echo $this->data['name'];?></h3></span>

	</div>

	<div id='form' data-destination='<?php echo site_url('admin/vacancies/save/'.$this->data['property_id']);?>' data-form_type='save'>

		<form>
			<input type='hidden' name='vacancy_id' value='<?php echo $this->data['vacancy_id'];?>' />
			<input type='text' name='date_available' value='Date Available' />
			<textarea name='description'>Description</textarea>
		</form>
	</div>
</div>

