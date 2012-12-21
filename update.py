#!/usr/bin/python

import sys, subprocess, time

def get_file_name():

	return time.strftime("%a_%d_%b_%Y_%H_%M_%S", time.localtime()).lower()


def update_database():pass

def main():

	local_backup = "../archive/" + get_file_name() + ".sql"
	subprocess.p(["mysqldump", "-u", "morehousej09", "-p", "prospero", ">", local_backup])

	# data_file = sys.argv[1]
	# print data_file

main()
