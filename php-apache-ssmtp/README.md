## PHP-APACHE-SSMTP
Docker image with Apache and SSMTP installed. You need to pass the /etc/ssmtp/ssmtp.conf file as a volume to confirgure your instance.

## Usage
* Create your environment file .env 
~~~
CONTAINER_NAME=myweb
HTTP_PORT=80
~~~
* Create your ssmtp confirguration file at conf folder. You can copy the example file and modify it.
* Create folder web and copy all web files into it.
* Run command
```
docker-compose up
```

Enjony!
