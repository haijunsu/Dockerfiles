Proxysql docker image
===

This image always loads configuration data from file /etc/proxysql.cnf. Every change in momory or disk may last when you reboot.

You can modify your configuration in another file and use volumn to override default /etc/proxysql.cnf. See [docker-compose.yml](https://github.com/haijunsu/Dockerfiles/blob/master/proxysql/docker-compose.yml).

How to use it?
=====
* Modify `config/proxysql.cnf`
* Run `docker-compose up -d`

Test
=====
* Admin console
```shell
./proxysqlAdmin.sh
```
* DB user logon
```shell
mysql -u yourdbuser -p -h yourproxysql -P6033
```
