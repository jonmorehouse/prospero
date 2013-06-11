<div class='thumbnail vacancy_thumbnail'>

	<span><img src='<?php echo $vacancy['thumbnail']['image']['url'];?>' /></span>					
	<span><span><?php echo $vacancy['thumbnail']['name'];?></span></span>					
	<span><span><?php echo $vacancy['description'];?></span></span>					
	<span><span><?php echo $vacancy['date_available'];?></span></span>					
	<span><a href='<?php echo base_url('admin/vacancies/remove/'.$vacancy['vacancy_id']);?>'>Remove Vacancy</a></span>					

</div>