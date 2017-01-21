## Voyager example ##

A simple test application for [Voyager package](https://github.com/the-control-group/voyager)

### Installation ###

* type `git clone https://github.com/bestmomo/voyager-example.git projectname` to clone the repository 
* type `cd projectname`
* type `composer install`
* type `composer update`
* copy *.env.example* to *.env*
* type `php artisan key:generate`to regenerate secure key
* if you use MySQL in *.env* file :
   * set DB_CONNECTION
   * set DB_DATABASE
   * set DB_USERNAME
   * set DB_PASSWORD
* if you use sqlite :
   * type `touch database/database.sqlite` to create the file
* type `php artisan migrate --seed` to create and populate tables

It's done !

A user has been created for you with the following login credentials:
* email: admin@admin.com
* password: password


