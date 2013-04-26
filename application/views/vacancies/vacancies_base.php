
<?php
	// SYSTEM WIDE LOADING!
	echo $this->header;
	$this->load->view("site_wide/data");//initialize data
	$this->load->view('site_wide/background');
	$this->load->view('site_wide/border');
	$this->load->view('navigation/navigation_top');//responsible for loading its own ivews
	$this->load->view('navigation/navigation_left');//responsible for loading its own views
	$this->load->view('site_wide/logo');
	$this->load->view('navigation/search');
	$this->load->view('site_wide/bumpbox_trigger');//this is used for creating the bumpbox 
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