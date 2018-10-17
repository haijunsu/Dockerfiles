Proxysql docker image
===

This image always loads configuration data from file /etc/proxysql.cnf after start. Every change in momory or disk may be lost when you restart the container.

You can modify your configuration in another file and use volumn to override default /etc/proxysql.cnf. See [docker-compose.yml](https://github.com/haijunsu/Dockerfiles/blob/master/proxysql/docker-compose.yml).

Supported tags
====
* `1.4`, `1.4.12`, `latest` ([Dockerfile](https://github.com/haijunsu/Dockerfiles/blob/master/proxysql/Dockerfile))

How to use it?
=====
* Modify `config/proxysql.cnf`
* Run `docker-compose up -d`

Test
=====
* Admin console
```shell
docker-compose exec proxysql mysql -u admin -p -h 127.0.0.1 --prompt="Admin > " -P6032
```
* DB user logon
```shell
mysql -u yourdbuser -p -h yourproxysqlserver -P6033
```
