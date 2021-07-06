<?php

use Illuminate\Session\TokenMismatchException;

/**
 * FRONT
 */
Route::get('Myclass', [
    'as' => 'Myclass',
    'uses' => 'tranthihoaitrang\myclass\Controllers\Front\ClassFrontController@index'
]);


/**
 * ADMINISTRATOR
 */
Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => ['admin_logged', 'can_see', 'in_context'],
                  'namespace' => 'Tranthihoaitrang\Myclass\Controllers\Admin',
        ], function () {

        /*
          |-----------------------------------------------------------------------
          | Manage Myclass
          |-----------------------------------------------------------------------
          | 1. List of Myclass
          | 2. Edit Myclass
          | 3. Delete Myclass
          | 4. Add new Myclass
          | 5. Manage configurations
          | 6. Manage languages
          |
        */

        /**
         * list
         */
        Route::get('admin/Myclass', [
            'as' => 'Myclass.list',
            'uses' => 'ClassAdminController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('admin/Myclass/edit', [
            'as' => 'Myclass.edit',
            'uses' => 'ClassAdminController@edit'
        ]);

        /**
         * copy
         */
        Route::get('admin/Myclass/copy', [
            'as' => 'Myclass.copy',
            'uses' => 'ClassAdminController@copy'
        ]);

        /**
         * post
         */
        Route::post('admin/Myclass/edit', [
            'as' => 'Myclass.class',
            'uses' => 'ClassAdminController@class'
        ]);

        /**
         * delete
         */
        Route::get('admin/Myclass/delete', [
            'as' => 'Myclass.delete',
            'uses' => 'ClassAdminController@delete'
        ]);

        /**
         * trash
         */
         Route::get('admin/Myclass/trash', [
            'as' => 'Myclass.trash',
            'uses' => 'ClassAdminController@trash'
        ]);

        /**
         * configs
        */
        Route::get('admin/Myclass/config', [
            'as' => 'Myclass.config',
            'uses' => 'ClassAdminController@config'
        ]);

        Route::post('admin/Myclass/config', [
            'as' => 'Myclass.config',
            'uses' => 'ClassAdminController@config'
        ]);

        /**
         * language
        */
        Route::get('admin/Myclass/lang', [
            'as' => 'Myclass.lang',
            'uses' => 'ClassAdminController@lang'
        ]);

        Route::post('admin/Myclass/lang', [
            'as' => 'Myclass.lang',
            'uses' => 'ClassAdminController@lang'
        ]);

    });
});
