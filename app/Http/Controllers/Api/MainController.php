<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $message = 'Sveika, pasaule!';
        return response()->json([
            'message' => $message
        ]);
    }
}
