<?php
/**
 * Created by PhpStorm.
 * User: julfiker
 * Date: 10/15/18
 * Time: 12:35 PM
 */

Route::get('swagger/doc', 'Julfiker\\Swagger\\DocController@index');
Route::get('swagger.json', 'Julfiker\\Swagger\\DocController@json')->name('swagger');