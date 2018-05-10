FROM tiangolo/uwsgi-nginx-flask:python3.6

MAINTAINER Haijun (Navy) Su <navysu@gmail.com>

RUN mkdir -p /storage/wwwroot

COPY requirements.txt /app
RUN pip install --upgrade pip && pip install --no-cache-dir -r requirements.txt

