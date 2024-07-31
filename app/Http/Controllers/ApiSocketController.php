<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ApiSocketController extends Controller
{
    //
    public function fetchAndSaveSensorData($id)
    {
        // URL API yang akan diambil datanya
        try {
            //code...
            $apiUrl = 'http://10.100.0.124/' . $id; // Ganti dengan URL API Anda

            // Mengambil data dari API
            $response = Http::get($apiUrl);
            $data = $response->json();

            // Memastikan data valid dan tidak null
            if ($data && isset($data['ID_Slave'], $data['StatusReadSensor'], $data['Sensor'], $data['RSSI'])) {
                // Membuat atau memperbarui data di database

                $lastSensorData = Sensor::where('slave', $data['ID_Slave'])
                    ->latest('created_at')
                    ->first();

                if ($lastSensorData->sensor != $data['Sensor']) {
                    Sensor::create([
                        'slave' => $data['ID_Slave'],
                        'sensor' => $data['Sensor'],
                        'rssi' => $data['RSSI'],
                    ]);
                }
            } else {
                // Tangani kasus jika data tidak sesuai format atau tidak ada
                return response()->json(['error' => 'Invalid data from API'], 400);
            }

            // Response sukses
            return response()->json(['success' => 'Data saved successfully']);
        } catch (\Throwable $th) {
            Log::info("ini error di api socket");
        }
    }
}
