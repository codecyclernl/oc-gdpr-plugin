<?php

Route::group([
    'prefix' => '/privacy',
    'namespace' => 'Codecycler\Gdpr\Http\Privacy',
    'middleware' => ['web'],
], function () {

    Route::get('/user/export/pdf', 'Export@pdf');

});