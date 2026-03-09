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

    public function store(Request $request)
    {
        Computer::create($request->all()); // TODO: Hacer FormRequest
    }

    public function show(Computer $computer)
    {
        return response()->json(Computer::find($computer->id)->with(['zone', 'reservations']));
    }

    public function update(Request $request, Computer $computer)
    {
        $computer->update($request->all()); // TODO: Hacer FormRequest
    }

    public function destroy(Computer $computer)
    {
        $computer->delete();
    }
}
