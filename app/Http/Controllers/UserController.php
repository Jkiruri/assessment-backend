<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
    public function index()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users');
        return response()->json($response->json());
    }

    public function show($id)
    {
        $response = Http::get("https://jsonplaceholder.typicode.com/users/{$id}");
        return response()->json($response->json());
    }
}

