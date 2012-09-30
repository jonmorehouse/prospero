#!/bin/bash

mysqldump="/usr/local/Cellar/mysql/5.5.25a/bin/mysqldump -umorehousej09 -pMoeller12"

destination="${HOME}/Documents/production_development/prospero/archive/database/"
database="prospero"
time_stamp=$(date +"%m_%d_%H_%I")
name="_prospero.sql"

file_name="${destination}${time_stamp}${name}"

$mysqldump $database > $file_name

echo "Prospero backed up at ${time_stamp}${name}"