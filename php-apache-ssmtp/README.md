## PHP-APACHE-SSMTP
Docker image with Apache and SSMTP installed. You need to pass the /etc/ssmtp/ssmtp.conf file as a volume to confirgure your instance.

## Usage (With docker-compose)

* Create file docker-compose.yaml

```
version: '3'
services:
  web-php:
    image: navysu/php-apache-ssmtp
    container_name: ${CONTAINER_NAME}
    ports:
      - "${HTTP_PORT}:80"
    restart:
      always
    volumes:
      - ./conf/ssmtp.conf:/etc/ssmtp/ssmtp.conf
      - ./web:/var/www/html
```

* Create your environment file .env 

```
CONTAINER_NAME=myweb
HTTP_PORT=80
```

* Create your ssmtp confirguration file at conf folder. You can copy the example file from [here](https://github.com/haijunsu/Dockerfiles/tree/master/php-apache-ssmtp/conf) and modify it.
* Create folder web and copy all web files into it.
* Run command

```
docker-compose up
```

Enjony!
