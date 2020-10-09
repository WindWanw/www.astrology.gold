<?php

Route::group('index', function () {

    Route::group('t', function () {

        Route::any('run', 'test/run')->name('index.test.run');

        Route::any('index','test/index')->name('index.test.index');

        Route::get('yoga','test/yoga')->name('index.test.yoga');
    });

})->prefix('index/');
