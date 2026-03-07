<?php

namespace App\Http\Controllers\V1;

use App\Models\Computer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()
    {
        return response()->json(Computer::with(['zone', 'reservations'])->get());
    }
}
