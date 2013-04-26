<?php
	// load in our basic view
	$this->load->view('site_wide/page_base');
?>

<h1 id='header'><?php echo $this->label;?></h1>

<div id='page_container'>
	<div id='page_content'>

		<?php if (count($this->vacancies) == 0):?>
			<h1>No Vacancies</h1>

		<?php else:?>
			<div id='vacancy_container'>

				<div>
					<ul>
						<li>Property</li>
						<li>Available</li>
						<?php if($this->filter == "residential"):?>
							<li>Available Layouts</li>
						<?php else:?>
							<li>Description</li>
						<?php endif;?>
						<li>Price</li>
					</ul>
				</div>
				<hr />
				<?php foreach ($this->vacancies as $vacancy):?>	
				<?php 
					// now load the vacancy thumbnail etc for each element
					$this->load->view("vacancies/vacancy", $vacancy);
				?>
			<?php endforeach;?>
			</div>
		<?php endif;?>
	</div>
</div>

<?php
	$this->load->view('site_wide/javascript_module_loader');
	$this->load->view('site_wide/footer');
?>