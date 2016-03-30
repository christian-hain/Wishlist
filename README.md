Wishlist Component [![Build status...](https://secure.travis-ci.org/soerenmartius/Wishlist.png?branch=master)](https://travis-ci.org/soerenmartius/Wishlist)
===================

A PSR-4 based PHP solution for Wishlists.
This is part of a series of examples about how to implement microservices with ~~not only~~ PHP.

Installation
------------

1. clone the repository
```
https://github.com/soerenmartius/Wishlist.git
```
2. Install dependencies through composer 
```
composer install --dev
```
--dev flag is optional and only useful if you want to run the tests.






Testing
-------

This component doesn implemented specifications only. This was solved using [PHPSPEC](https://www.phpspec.net/en/latest/) 


Running the tests
-----------------

```
./vendor/bin/phpspec run --format=pretty
```


Using travis-ci for builds
--------------------------
This component is using [travis-ci](https://travis-ci.org/soerenmartius/Wishlist) for building and running the tests based on the configuration stored in **.travis.yml**.
