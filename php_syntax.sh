#!/bin/bash

counter=0
search_string="No syntax errors detected"

for i in application/controllers application/views application/models application/libraries
	do
		for z in `find $i *.php`
			do
				result=`php -l $z`
				if [[ "$result" != "No syntax"* ]];
					then
						echo -e "$result \n"
						let counter+=1
				fi
			done
		done

if [[ $counter == 0 ]]; 
	then
		echo -e "\nNo syntax problems"
else
	echo -e "\n $counter files have syntax errors"
fi
echo -e "\n"
