ZF2Doctrine2Skeleton
=======================

Introduction
------------
This is a simple, skeleton application using the ZF2 MVC layer and Doctrine 2 ORM.
This application is meant to be used as a starting place for those looking to get 
their feet wet with ZF2 and Doctrine 2.

Installation (Using Composer)
-----------------------------

The recommended way to get a working copy of this project is to clone the 
repository and manually invoke `composer` using the shipped `composer.phar`:

    cd my/project/dir
    git clone git://github.com/emyki/ZF2Doctrine2Skeleton.git
    cd ZF2Doctrine2Skeleton
    php composer.phar self-update
    php composer.phar install

(The `self-update` directive is to ensure you have an up-to-date `composer.phar`
available.)

Virtual Host
------------
Afterwards, set up a virtual host to point to the public/ directory of the
project and you should be ready to go!
