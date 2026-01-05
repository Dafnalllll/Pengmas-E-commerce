<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MonitoringController extends Controller
{
    private $firebaseUrl;
    private $firebaseSecret;

    public function __construct()
    {
        $this->firebaseUrl = 'https://pengabdian-jabal-rahmah-default-rtdb.firebaseio.com';
        $this->firebaseSecret = 'SSQsOa9NfbtLzsXV3fj5RTjt9illtKfyQ9aU1PR5';
    }

    public function index()
    {
        try {
            // Ambil data kelembapan dari Firebase
            $response = Http::get("{$this->firebaseUrl}/kelembapan.json?auth={$this->firebaseSecret}");

            if ($response->successful()) {
                $kelembapanData = $response->json();

                // Proses data untuk mendapatkan 22 sensor terakhir
                $sensors = $this->processFirebaseData($kelembapanData);

                return view('pages.admin.monitoring', [
                    'sensors' => $sensors
                ]);
            } else {
                Log::error('Firebase request failed', ['response' => $response->body()]);
                return view('pages.admin.monitoring', [
                    'sensors' => $this->getDummyData(),
                    'error' => 'Gagal mengambil data dari Firebase'
                ]);
            }
        } catch (\Exception $e) {
            Log::error('Firebase error', ['message' => $e->getMessage()]);
            return view('pages.admin.monitoring', [
                'sensors' => $this->getDummyData(),
                'error' => 'Terjadi kesalahan: ' . $e->getMessage()
            ]);
        }
    }

    private function processFirebaseData($data)
    {
        $sensors = [];

        if (!$data) {
            return $this->getDummyData();
        }

        // Ambil data terakhir dari setiap sensor
        // Asumsi struktur: kelembapan/sensor1/timestamp/value
        $sensorCount = 0;

        foreach ($data as $sensorKey => $sensorData) {
            if ($sensorCount >= 22)
                break;

            // Ambil data terakhir (sorted by timestamp descending)
            if (is_array($sensorData)) {
                krsort($sensorData); // Sort descending by key (timestamp)
                $latestData = reset($sensorData);

                $currentValue = $latestData['value'] ?? 0;
                $previousValue = $this->getPreviousValue($sensorData);
                $change = $currentValue - $previousValue;
                $changePercent = $previousValue > 0 ? round(($change / $previousValue) * 100, 1) : 0;

                $sensors[] = [
                    'id' => $sensorCount + 1,
                    'name' => "Sensor " . ($sensorCount + 1),
                    'value' => round($currentValue, 0),
                    'change' => $changePercent,
                    'trend' => $change >= 0 ? 'up' : 'down',
                    'lastUpdate' => $latestData['timestamp'] ?? now()->toDateTimeString()
                ];

                $sensorCount++;
            }
        }

        // Jika data kurang dari 22, tambahkan dummy data
        while (count($sensors) < 22) {
            $sensors[] = $this->generateDummySensor(count($sensors) + 1);
        }

        return $sensors;
    }

    private function getPreviousValue($sensorData)
    {
        $values = array_values($sensorData);
        return isset($values[1]['value']) ? $values[1]['value'] : ($values[0]['value'] ?? 0);
    }

    private function generateDummySensor($id)
    {
        $value = rand(40, 80);
        $change = rand(-10, 10) / 10;

        return [
            'id' => $id,
            'name' => "Sensor $id",
            'value' => $value,
            'change' => $change,
            'trend' => $change >= 0 ? 'up' : 'down',
            'lastUpdate' => now()->subMinutes(rand(1, 60))->toDateTimeString()
        ];
    }

    private function getDummyData()
    {
        $sensors = [];
        for ($i = 1; $i <= 22; $i++) {
            $sensors[] = $this->generateDummySensor($i);
        }
        return $sensors;
    }
}
