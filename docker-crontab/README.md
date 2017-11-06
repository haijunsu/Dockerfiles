## DOCKER-CRONTAB

Easy to create cronjob in docker. 

## Usage
1. Copy conf/cronjobs.sample to conf/cronjobs
2. Modify conf/cronjobs to add your jobs
3. Run docker container
```
docker run -it --name my-crontab -v $PWD/conf/cronjobs:/jobs/cronjobs navysu/docker-crontab
```

