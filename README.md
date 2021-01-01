# Kache
## Requirements: 

> MySQL

    sudo apt-get install mysql-server -y

> Init MySQL

    sudo /usr/bin/mysql_secure_installation


> Apache2, PHP7.4, Laravel8.x

Installation Guide:

Skip Step 4 --> https://www.howtoforge.com/tutorial/install-laravel-on-ubuntu-for-apache/

> PHP Extensions

    sudo apt-get install -y php7.4-{bcmath,bz2,intl,gd,mbstring,mcrypt,mysql,zip} && sudo apt-get install libapache2-mod-php -y

#
## Install:
```
composer update
npm install && npm run dev
php artisan migrate
```
## Run Server:
    php artisan serve


#### Install phpMyAdmin: https://support.hostway.com/hc/en-us/articles/115001762184-Install-and-Configure-phpMyAdmin-on-Linux


## To hold session after registration 

```
    //Line 56 of RegisteredUserController 
    $this->guard->login($user, true);
```
## Devs Note
Model and migration [link: https://laravel.com/docs/8.x/eloquent#defining-models]
```
php artisan make:model <ModelName> -mfsc
```

#### For Server

    sudo systemctl enable apache2.service
    sudo systemctl enable mysql.service
#
## License

