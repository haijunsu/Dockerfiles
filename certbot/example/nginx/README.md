## Example to use navysu/certbot container with nginx

* Create containers
```
docker-compose up -d
```

* Modify volumes/nginx/conf/myserver.conf and volumes/nginx/conf/myserver-ssl.conf.rename.after.get.certificates with your domain name

* Run `getCerts.sh` to get certificates
```
./getCerts.sh -d <your domain name>
```

* Copy myserver-ssl.conf.rename.after.get.certificates myserver.conf to volumes/nginx/conf/myserver-ssl.conf

* Restart nginx container
```
docker-compose restart my-web
```
