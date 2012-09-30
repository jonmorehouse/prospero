#!/bin/bash

directory[0]="application/libraries/"
directory[1]="application/controllers/"
directory[2]="application/models/"
directory[3]="application/views/"
directory[4]="resources/javascript/local/"
directory[5]="resources/javascript/live/"
directory[6]="resources/css/live/"
directory[7]="resources/css/local/"

lines=0
words=0
for i in "${directory[@]}"
do
	for z in `find $i -name \*.*`
	do
		file_lines=`wc -l < $z`
		file_words=`wc -w < $z`
		let "words += $file_words"
		let "lines+= $file_lines"
	done
done

echo -e "Lines: $lines \nWords: $words"

