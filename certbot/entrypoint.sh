#!/bin/sh
set -e

crontab /jobs/cronjobs && crond -f -L -
