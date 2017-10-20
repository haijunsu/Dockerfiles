FROM navysu/python-ssmtp

MAINTAINER Haijun (Navy) Su <navysu@gmail.com>

RUN mkdir -p /storage/wwwroot
WORKDIR /storage/wwwroot

COPY requirements.txt /storage/wwwroot
RUN pip install --no-cache-dir -r requirements.txt


ENTRYPOINT  ["/storage/wwwroot/worker.sh"]
