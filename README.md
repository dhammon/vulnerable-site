# Vulnerable By Design Website
This repository hosts a containerized and vulnerable PHP application. 
1. Broken Access Control
2. SQLi
4. XSS
5. Unprotected Cookies
6. Hardcoded Credentials
7. File Disclosure


# Requirements
Docker


# Run
Download the repository:

`git clone https://github.com/dhammon/vulnerable-site`

Start the container:

`docker run -it -d -p "80:80" -v ${PWD}/app:/app --name vulnerable-site mattrayner/lamp:latest`

Configure the database (wait 2 minutes after starting the container):

`docker exec vulnerable-site /bin/bash /app/db.sh`


# Troubleshooting
Stop the container:

`docker stop vulnerable-site`

Destroy the container:

`docker container rm vulnerable-site`

Replace repository files:

`git pull`