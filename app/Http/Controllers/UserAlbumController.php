<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserAlbumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
    public function index(Request $request, $id)
    {
        // Make an HTTP request to fetch albums for the user with the given id
        $response = Http::get("https://jsonplaceholder.typicode.com/users/{$id}/albums");

        // Check if the request was successful
        if ($response->successful()) {
            // Extract the albums from the response JSON
            $albums = $response->json();

            // Return the albums as a JSON response
            return response()->json($albums);
        } else {
            // Handle the case where the request failed
            return response()->json(['error' => 'Failed to fetch albums'], $response->status());
        }
    }
    public function showPhotos(Request $request, $id)
    {
        // Make an HTTP request to fetch albums for the user with the given id
        $response = Http::get("https://jsonplaceholder.typicode.com/album/{$id}/photos");

        // Check if the request was successful
        if ($response->successful()) {
            // Extract the albums from the response JSON
            $photos = $response->json();

            // Return the albums as a JSON response
            return response()->json($photos);
        } else {
            // Handle the case where the request failed
            return response()->json(['error' => 'Failed to fetch albums'], $response->status());
        }
    }

}
