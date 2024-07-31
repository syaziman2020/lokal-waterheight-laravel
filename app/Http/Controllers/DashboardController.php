<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $sensors = Sensor::orderBy('id', 'desc')->paginate(10);

        return view('app', ['sensors' => $sensors]);
    }

    public function getLatestS1()
    {
        $latestSensor = Sensor::where('slave', 'S1')
            ->latest('id')
            ->first();

        return response()->json(['sensor' => $latestSensor ? $latestSensor : 'N/A']);
    }
    public function getLatestS2()
    {
        $latestSensor = Sensor::where('slave', 'S2')
            ->latest('id')
            ->first();

        return response()->json(['sensor' => $latestSensor ? $latestSensor : 'N/A']);
    }
}
