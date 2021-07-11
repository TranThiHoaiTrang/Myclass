# Package Filemanager

* @webiste: http://foostart.com
* @package-name: package-myclass
* @author: Kang
* @date: 12/07/2021
* @version: 1.9

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




## Step 3: Publish the package’s config and assets :

1. php artisan vendor:publish --tag=lfm_config
1. php artisan vendor:publish --tag=lfm_public

## Step 4: Clear cache
1. php artisan route:clear
1. php artisan config:clear
1. php artisan storage:link

## Step 5: Migrate and Seeder
Run the following
1. php artisan migrate
1. php artisan db:seed

## Step 6: Add user

foostart\laravel-filemanager\src\Handlers\ConfigHandler.php
```
<?php

namespace Foostart\Filemanager\Handlers;


class ConfigHandler
{
    public function userField()
    {
        //original
        //return auth()->user()->id;
        $auth = \App::make('authenticator');
        $user = $auth->getLoggedUser();
        if (empty($user)) {
            return NULL;
        }
        return $user->id;
    }
}

## Step 7: Set up router
[
            'name'        => 'class-admin.menus.top-menu',
            "route"       => "Myclass",
            "link"        => '/admin/Myclass',
            "permissions" => [$admin]
        ],

```
