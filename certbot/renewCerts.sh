#################################################
# Using my-certbot to renew certificate. Verify method is wwwroot
#
# Usage:
#    ./renewCerts.sh
#
###################################################

/usr/local/bin/docker-compose exec my-certbot certbot renew

