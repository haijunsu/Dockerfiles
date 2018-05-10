## TIQC-Flask-uWSGI-nginx
It is based on project <https://github.com/tiangolo/uwsgi-nginx-flask-docker> and installed our own requirement packages.
This image is for Tech Incubator @ Queens College only. Please don't pull it if you don't understand the Dockerfile.

Yaml file example

```yaml
version: "2"
services:
  data-transfer:
    image: "tiqc/flask-uwsgi-nginx"
    volumes:
      - ./web/data_transfer:/app
    ports:
      - "${HTTP_PORT}:80"
    environment:
      - FLASK_APP=app/main.py
      - FLASK_DEBUG=1
      - RUN='flask run --host=0.0.0.0 --port=80'
    restart: always
```
