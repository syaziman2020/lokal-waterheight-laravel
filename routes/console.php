<?php

use App\Http\Controllers\ApiSocketController;
use Illuminate\Support\Facades\Schedule;

use Illuminate\Support\Facades\Log;

// Artisan::command('inspire', function () {
//     $this->comment(Inspiring::quote());
// })->purpose('Display an inspiring quote')->hourly();


Schedule::call(function () {
    Log::info("schedule ini berjalan");
    $controller = new ApiSocketController();
    $controller->fetchAndSaveSensorData(1);
    $controller->fetchAndSaveSensorData(2);
})->everyTwentySeconds();
