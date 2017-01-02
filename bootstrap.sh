#!/usr/bin/env bash

apt-get update
apt-get install -y apache2 php5-common libapache2-mod-php5 php5-cli
rm -rf /var/www
ln -fs /vagrant /var/www

echo "webserver active on localhost:6001"