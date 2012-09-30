#!/bin/bash


# notes -- change mysql command to be a program that will just login unless passed commands
	# if only a database logged in then will just login there
	# otherwise will send the results

database=${1}
username="morehousej09"
password="Moeller12"
mysql=$(which mysql)
awk=$(which awk)
grep=$(which grep)

login="${mysql} -u${username} -p${password} ${database}"

# evaluate login as a string -- then add the other commands
# grep -v = not matching!
tables=$(${login} -e 'show tables' | ${awk} '{ print $1}' | ${grep} -v '^Tables_in*') 

# drop individual table command
# table=""

# loop through all tables!
counter=0
for table in $tables
	do
		${mysql} -u${username} -p${password} ${database} -e "drop table ${table}"
		echo -e "Removed table ${table}"
		counter+=1
	done

echo $counter
