Wishlist Component [![Build status...](https://secure.travis-ci.org/soerenmartius/Wishlist.png?branch=master)](https://travis-ci.org/soerenmartius/Wishlist) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/soerenmartius/Wishlist/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/soerenmartius/Wishlist/?branch=master) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/713d9eb4-d8c3-4f85-902e-4f3412dc0b77/mini.png)](https://insight.sensiolabs.com/projects/713d9eb4-d8c3-4f85-902e-4f3412dc0b77)
===================

A PSR-4 based PHP solution for Wishlists.
This is part of a series of examples about how to implement microservices with ~~not only~~ PHP.

Installation
------------

1. clone the repository ```
                        https://github.com/soerenmartius/Wishlist.git
                        ```
2. Install dependencies through composer ```
                                         composer install --dev
                                         ``` 
   The dev flag is optional and only useful if you want to run the tests.


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


Using scrutinizer-ci for code analysis
-----------------------------------
This componente is using [scrutinizer-ci](https://scrutinizer-ci.com/) for code analysis such as code quality and code coverage ( Although code coverage isn't a good indicator for code code ).
Scrutinizers configuration is stored in **.scrutinizer.yml**. For this example we dont use a custom config but we simply rely on scrutinizers default settings.
