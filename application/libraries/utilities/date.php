<?php

class Date{
	
	public function db_date(){
		// THIS IS FOR THE DATE TO BE INSERTED INTO THE DATABASE
		
		$date = new DateTime(NULL, new DateTimeZone('America/Los_Angeles'));
		$db_date = $date->format('y-m-d H:i:s');

		return $db_date;
		
	}
	
	public function formatted_date(){
		// RETURNS A USER FRIENDLY DATE
		
		$date = new DateTime(NULL, new DateTimeZone('America/Los_Angeles'));
		$formatted_date = $date->format('D-M H:i');
		return $formatted_date;
		
	}
	
	public function sort_dates($dates) {//will sort a bunch of datetimes and will give a month ranking of how many views per month in the past year
		
		
		
		
	}
};