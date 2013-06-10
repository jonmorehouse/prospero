<div class='thumbnail'>
		<h1><?php echo $thumbnail['name'];?></h1>

		<div>
			<img src='<?php echo $thumbnail['image']['url'];?>' alt='<?php echo $thumbnail['image']['alt'];?>' />
		</div>
		
		<div>
			<php echo $thumbnail['blurb'];?>
		</div>

		<a href='<?php echo base_url('admin/vacancies/add');?>'>Add Vacancy</a>
</div>