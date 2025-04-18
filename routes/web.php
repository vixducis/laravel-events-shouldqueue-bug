<?php

use App\Events\Approval;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Approval::dispatch();
});
