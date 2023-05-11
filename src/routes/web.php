<?php

use Tester\Test\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('test',TestController::class);