<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frame;


class FrameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frames = Frame::paginate(10);
        return view('frames.index', compact('frames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        // $doctor = Doctor::find($id);
        // $orders = $doctor->orders()->paginate(10);
        // $doctorprescriptions = $doctor->doctorprescriptions()->paginate(10);
        // $customers=$doctor->customers()->paginate(10);
        // return view('doctors.show', compact('doctor', 'orders','doctorprescriptions','customers'));


        $frame = Frame::findOrFail($id);
        return view('frames.show', compact('frame'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}













