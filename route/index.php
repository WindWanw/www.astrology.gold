<?php

Route::group([], function () {

    Route::get("index", "index/index")->name("index");

    Route::group("blog", function () {

        Route::get("index", "blog/index")->name("blog.index");
    });

    Route::group("personal", function () {

        Route::get("index", "personal/index")->name("personal.index");

        Route::get("detail","personal/detail")->name("personal.detail");
    });

});
