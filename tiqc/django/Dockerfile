FROM python:3.6

MAINTAINER Haijun (Navy) Su <navysu@gmail.com>

RUN mkdir -p /storage/wwwroot
WORKDIR /storage/wwwroot

COPY requirements.txt /storage/wwwroot
RUN pip install --no-cache-dir -r requirements.txt

EXPOSE 8000

ENTRYPOINT  ["python", "/storage/wwwroot/web/manage.py", "runserver","0.0.0.0:8000"]
