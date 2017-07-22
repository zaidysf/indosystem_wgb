# indosystem_wgb
Indosystem Wedding Guestbook

### Installation ###

* `git clone https://github.com/zaidysf/indosystem_wgb.git projectname`
* `cd projectname`
* `composer install`
* `php artisan key:generate`
* Create a database and inform *.env*
* `php artisan migrate --seed` to create and populate tables
* Inform *config/mail.php* for email sends
* `php artisan vendor:publish` to publish filemanager
* `php artisan serve` to start the app on http://localhost:8000/

### Features ###

* Home page
* Authentication (login, logout, password reset)
* Show and Add Guestbook Records by Guest
* Show and Delete Guestbook Records by Administrator

### Tricks ###

To test application the database is seeding with users :

* Administrator : email = admin@indosystem.com, password = 123456
