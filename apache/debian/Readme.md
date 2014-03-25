# Debian/Sid

Here are the instructions for setting up on debian sid.

# First uninstall everything
  apt-get remove --purge apache2
  apt-get --purge remove php5*
  apt-get remove --purge libapache2-mod-php5

# we dont use cakephp cakephp-scripts

  aptitude install  php5 php5-sqlite php5-mysql mysql-server-5.5  php-pear php-apc php5-curl libapache2-mod-php5  php5-cgi php5-fpm apache2
  a2enmod rewrite
  service apache2 restart


To get sqlite running :
  apt-get install php5-sqlite
  php5enmod pdo
  php5enmod pdo_sqlite
  and for some reaason this does not do anything, so I had to hack it:
  ln -vs /usr/share/php5/sqlite/*.ini /etc/php5/conf.d

The apache config is located :
newspaper/apache/debian/etc/apache2/sites-available/001-newspaper.conf
this is copied into /etc/apache2/sites-available/001-newspaper.conf, 
and then you run a2ensite 001-newspaper

