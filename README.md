newspaper
=========

Cake PHP newspaper application

Created
=======
Created with the command using https://github.com/h4ck3rm1k3/cakephp-git-starter
../cakephp-git-starter/cakephp_git_starter.sh  . 2.4.5


Installation
============

newspaper/app/webroot$ sudo chown www-data newspaper.sqlite
newspaper/app/webroot$ sudo chown -R www-data app/tmp/

for the debian sid specific installation instructions 
see apache/debian/Readme.md


Zipcode
=======

Create database 

mysqladmin create newspaper -u root -p 

    mysql> create user newspaper identified by 'newspaper';
    mysql> use newspaper
    mysql> grant all on *.* to newspaper;

The zipcode database is loaded from the submodule from civicrm ::

    mysql> source sources/civicrm/sql/zipcodes.mysql

 List :
http://localhost:81/zipcodes/index