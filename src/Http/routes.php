<?php

Route::group([
  'middleware' => 'admin:protected',
  'namespace' => 'Roocket2\Cms2\Http\Controllers'
], function () {
  Route::get('/adminpanel/index', 'AdminPanelController@index');
  Route::get('/adminpanel/config', function () {
    return config('cms.url');
  });
});