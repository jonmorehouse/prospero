#!/bin/bash

# create a function to work on each of the images in our property_images folder
function worker {

	# responsible for changing all images in the directory to pngs
	# responsible for counting the images, and resizing etc
	directory=${1}	
	# set the counter at 0
	counter=0

	# echo $directory
	# image 
	for image in $directory/*
	do
		# update the counter
		let counter=$counter+1

		# generate the proper name
		if [[ $counter -lt 10 ]]; then
			name="$directory/0$counter.png"	
		else	
			name="$directory/$counter.png"
		fi

		# move the image / rename it
		mv $image $name

		# resize the image / reformat it to a png
		sips -s format png $name
		# resize to width 800
		sips --resampleWidth 800 $name
	done
}

# export the worker function before using it
export -f worker

# go through each of the folders and then call the worker function
find property_images -mindepth 1 -maxdepth 1 -type d | xargs -n 1 -I{} bash -c "worker {}"

# now lets find all of our new images and output them into the proper file for the image_upload controller
# to upload the images, just run php index.php image_upload
find property_images -type f > images.txt

