<?php
Route::group( ['prefix' => 'admin'], function() {
    Route::get('news/create','admin/AAAcontroller@bbb');
})
?>