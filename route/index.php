<?php

Route::group([], function () {

    Route::get('index', 'index/index')->name('index');

    Route::group("work", function () {

        Route::get("index", "work/index")->name("work.index");
    });

    Route::group("blog", function () {

        Route::get("index", "blog/index")->name("blog.index");
    });

    Route::group("education", function () {

        Route::get("index", "education/index")->name("education.index");
    });

    Route::group("employement", function () {

        Route::get("index", "employement/index")->name("employement.index");
    });

    Route::group("service", function () {

        Route::get("index", "service/index")->name("service.index");
    });

});
