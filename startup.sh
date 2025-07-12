#!/usr/bin
#!/usr/sbin
#!/bin/bash

#Created by: Abhishek Sharma
#E-mail: abhishek1997sh@gmai.com
#PHP execution command

################################### Variables ###################################
export DATABASE_HOST= 'db';   # Please write you DATABASE HOST NAME (docker mysql image name)
export DB_TABLE_NAME= 'propertydb'; # Please write you DATABASE NAME
export DB_LOGIN_USER= 'suraj';	# Please write you DATABASE USER NAME
export DB_LOGIN_PASS= 'PASS';	# Please write you DATABASE USER PASSWORD

#################################################################################


######################## Step-1 ########################

#-------- if fresh docker file need to run
#-------- so uncomment below line

#docker builder prune -a   # <---- uncomment this line

docker build -t webapp-php 

######################## Step-2 ########################

#Now run docker-compose file
docker compose up -d 

sleep 120 		# wait time 2 min you can change as per your requirement

######################## Step-3 ########################

# After running docker-compose file take a login in phpmyadmin portal and run all the queries which is mentioned in database/users.sql file



######################## Step-4 ########################
# Now you can access the web application on your browser
# http://localhost:8080
# or you can access the phpmyadmin on your browser
# http://localhost:8081












