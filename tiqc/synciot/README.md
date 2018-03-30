## TIQC-Synciot
This image is for Tech Incubator @ Queens College only. Please don't pull it if you don't understand the Dockerfile.

It is for Synciot webapp only.

### Add new dependency
* Modify the package.json
* Build Dockerfile
```shell
docker build -t synciot .
```
* Run webapp with new image (modify docker-compose.yml)
```ini
  # image: "tiqc/synciot"
  image: "synciot"
```
* Copy package-lock.json from container
```
docker cp <container name>:/home/node/app/package-lock.json .
```
* Replace package-lock.json
* Goto <https://hub.docker.com/r/tiqc/synciot/~/settings/automated-builds/> and trigger build event.
