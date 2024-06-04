<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PhotoController extends Controller
{
    public function index()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/photos');
        return response()->json($response->json());
    }

    public function show($id)
    {
        $response = Http::get("https://jsonplaceholder.typicode.com/photos/{$id}");
        return response()->json($response->json());
    }
}

