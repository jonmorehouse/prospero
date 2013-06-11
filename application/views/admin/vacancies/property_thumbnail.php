<div class='thumbnail'>

	<span>
		<img src='<?php echo $thumbnail['image']['url'];?>' />
	</span>

	<span>
		<span>
			<?php echo $thumbnail['name'];?>
		</span>
	</span>

	<span>
		<a href='<?php echo base_url('admin/vacancies/add/'. $thumbnail['property_id']);?>'>Add Vacancy</a>
	</span>
</div>