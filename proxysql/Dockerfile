FROM ubuntu:16.04

MAINTAINER Haijun (Navy) Su <navysu@gmail.com>

ENV PROXYSQL_VERSION=1.4.12

RUN deps=' \
    curl \
    ca-certificates \
    mariadb-client \
    python-mysqldb \
  ' \
  && set -x \
  && apt-get update \
  && apt-get install -y --no-install-recommends $deps \
  && rm -rf /var/lib/apt/lists/*

RUN cd /tmp \
  && curl -SLO "https://github.com/sysown/proxysql/releases/download/v${PROXYSQL_VERSION}/proxysql_${PROXYSQL_VERSION}-ubuntu16_amd64.deb" \
  && dpkg -i "proxysql_$PROXYSQL_VERSION-ubuntu16_amd64.deb" \
  && apt-get install -f \
  && rm "proxysql_$PROXYSQL_VERSION-ubuntu16_amd64.deb"

ADD config/proxysql.cnf /etc/proxysql.cnf

EXPOSE 6032 6033

CMD [ "proxysql", "--initial",  "-f", "-c /etc/proxysql.cnf" ]
