#################################################
# Using my-certbot to get certificate. Verify method is wwwroot
#
# Usage:
#    ./getCerts.sh -d <domain name> [-d <domain name>] [...]
#
###################################################

/usr/local/bin/docker-compose exec my-certbot certbot certonly --webroot --webroot-path=/data/letsencrypt $* 

