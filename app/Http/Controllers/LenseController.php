<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lense;


class LenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lenses = Lense::paginate(10); 
        return view('lenses.index', compact('lenses'));
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

        $lense = Lense::findOrFail($id);
        return view('lenses.show', compact('lense'));
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
