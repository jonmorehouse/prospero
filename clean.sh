#!/bin/bash

./mysql_dump.sh
php index.php tools/clear_general_tables
php index.php tools/create_default
php index.php tools/create_default_media
./clear_folders.sh
