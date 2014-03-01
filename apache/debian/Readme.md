# Debian/Sid

Here are the instructions for setting up on debian sid.

# First uninstall everything
  apt-get remove --purge apache2
  apt-get --purge remove php5*
  apt-get remove --purge libapache2-mod-php5

# 

  aptitude install cakephp cakephp-scripts
  apt-get install php5 php5-sqlite php5-mysql
  aptitude install mysql-server-5.5
  aptitude install php-pear php-apc php5-curl
  aptitude install libapache2-mod-php5 libapache2-mod-php5filter php5-cgi php5-fpm
  aptitude install apache2
  a2enmod rewrite
  service apache2 restart


To get sqlite running :
  apt-get install php5-sqlite
  php5enmod pdo
  php5enmod pdo_sqlite
  and for some reaason this does not do anything si I had to hack it:
  ln -vs /usr/share/php5/sqlite/*.ini /etc/php5/conf.d
