<?php

class Date{
	
	public $timezone;
	
	public function __construct() {
		
		$this->timezone = "America/Los_Angeles";
		
	} 
	
	public function db_date($date = false) {
		// THIS IS FOR THE DATE TO BE INSERTED INTO THE DATABASE
		
		if(!$date)
			$date = $this->current();

		$db_date = $this->db_convert($date);

		return $db_date;
		
	}
	
	public function formatted_date($date = false) {
		// RETURNS A USER FRIENDLY DATE
		
		if(!$date)
			$date = $this->current();
		
		$formatted_date = $date->format('D-M H:i');
		return $formatted_date;
		
	}

	public function string_date($date = false) {
		
		if(!$date)
			$date = $this->current();
		
		$formatted_date = $date->format('D M d');
		$formatted_time = $date->format('H:I');
		
		$string = "{$formatted_date} at {$formatted_time}";
		
		return $string;
	}
	
	public function year_ago($date = false) {
		
		if(!$date)
			$date = $this->current();

		$date = $this->alter($date, 'year', -1);
	
		return $date->format('D M d Y');
	}
	
	
	public function sort_dates($dates) {//will sort a bunch of datetimes and will give a month ranking of how many views per month in the past year
		
		$date = $this->current();

		
		
	}
	
	public function db_date_increments($input_date, $increment) {//start date is where the timestamp starts
		
		$date_list = array();//will add a list of all the month timestamps
		
		$earliest_date = strtotime($input_date);//take the database class and make sure that it works
		
		$current_increment = $this->current();//the first increment should be the current datetime
		$flag = true;
		
		while ($flag) {//only in the given time frame

			array_push($date_list, $current_increment);
			
			$current_increment = $this->alter($current_increment, $increment);//decrease down by the increment (day, month, year)
			
			if($this->db_convert($current_increment) > $earliest_date)
				array_push($date_list, $this->db_convert($current_increment));
			else
				$flag = false;
		}
		
		return $date_list;//return the arrays
	}


/******* PRIVATE FUNCTIONS *******/

	private function current() {//create a current datetime object 
		
		$date = new DateTime(NULL, new DateTimeZone($this->timezone));
		return $date;
		
	}
	
	private function alter($date, $input = 'year', $increment = -1) {//input can be year/month/day and increment is +1 / -1 etc
		
		$date = date_modify($date, "{$increment} {$input}");//date modify

		return $date;
	}

	private function db_convert($date) {//formats specifically for database
		
		return $date->format('y-m-d H:i:s');
		
	}
};