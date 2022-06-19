## Installation

git Init repository

```bash

# clone the repo
$ git clone https://github.com/Gabe-Siqueira/library-system-backend.git library-system-backend

# go into app's directory
$ cd library-system-backend

```

You can install the package via composer:

```bash

# install app's dependencies
$ composer install

```

Start application database structure:

```bash

# create database tables
$ php artisan migrate --database=mysql

#insert basic data for the application
$ php artisan db:seed

```
Generate keys needed for the application
``` bash

# generate application key
$ php artisan key:generate

# generate jwt key
$ php artisan jwt:secret

```

start application services:

```bash

# start serve
$ php artisan serve --port=8000

```
