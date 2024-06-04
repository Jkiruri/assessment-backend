<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AlbumController extends Controller
{
    public function index()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/albums');
        return response()->json($response->json());
    }

    public function show($id)
    {
        $response = Http::get("https://jsonplaceholder.typicode.com/albums/{$id}");
        return response()->json($response->json());
    }
}
