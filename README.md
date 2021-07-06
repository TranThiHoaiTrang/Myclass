# Package Filemanager

* @webiste: http://foostart.com
* @package-name: package-filemanager
* @author: Kang
* @date: 27/12/2017
* @version: 2.0

## Features

1. CRUD
1. Add category to form
1. Language standard
1. Add filters on table data
1. Add token for prevent XSRF

## Step 1: Add service providers to **config/app.php**

1. Tranthihoaitrang\Myclass\ClassServiceProvider::class

## Step 2: Install publish

1. php artisan vendor:publish --provider="Tranthihoaitrang\Myclass\ClassServiceProvider" --force
1. php artisan vendor:publish --provider="Foostart\Slideshow\SlideshowServiceProvider" --force




## Step 4: Publish the package’s config and assets :

1. php artisan vendor:publish --tag=lfm_config
1. php artisan vendor:publish --tag=lfm_public

## Step 5: Clear cache
1. php artisan route:clear
1. php artisan config:clear
1. php artisan storage:link

## Step 6: Migrate and Seeder
Run the following
1. php artisan migrate
1. php artisan db:seed

