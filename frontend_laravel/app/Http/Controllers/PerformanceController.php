<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PerformanceController extends Controller
{
    public function index()
    {
        // Panggil API Golang untuk data
        $response = Http::get('http://localhost:8080/api/performance');
        $data = $response->json();

        return view('dashboard', compact('data'));
    }
}
