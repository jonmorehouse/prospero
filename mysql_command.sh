#!/bin/bash


# notes -- change mysql command to be a program that will just login unless passed commands
	# if only a database logged in then will just login there
	# otherwise will send the results

command=${1}
database="prospero"
username="morehousej09"
password="Moeller12"
mysql=$(which mysql)

login="${mysql} -u${username} -p${password} ${database}"

if [[ ${#command} == 0 ]]; then
	$login
else
	${login} -e "${command}"
fi
