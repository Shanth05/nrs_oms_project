<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(20);
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        $customers = Customer::paginate(20);
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:15',
            'fname' => 'required|string|max:150',
            'lname' => 'required|string|max:150',
            'full_name' => 'required|string|max:255',
            'gender' => 'required|string|max:30',
            'mobile_no' => 'required|string|max:15',
            'date_of_birth' => 'required|date',
            'age' => 'required|string|max:11',
            'nic_no' => 'required|string|max:50',
            'address' => 'required|string|max:255',
        ]);

        Customer::create([
            'title' => $request->title,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'full_name' => $request->full_name ?? "{$request->fname} {$request->lname}",
            'gender' => $request->gender,
            'mobile_no' => $request->mobile_no,
            'date_of_birth' => $request->date_of_birth,
            'age' => $request->age,
            'nic_no' => $request->nic_no,
            'address' => $request->address,
        ]);

        return redirect()->route('customers.index')->with('success', 'Customer added successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::find($id);
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'mobile_no' => 'required|string|max:15',
            'date_of_birth' => 'required|date',
            'nic_no' => 'required|string|max:20',
            'address' => 'nullable|string|max:255',
            'is_regular' => 'boolean',
        ]);

        $customer = Customer::findOrFail($id);
        $customer->update($validatedData);

        return redirect()->route('customers.show', $customer->id)
            ->with('success', 'Customer updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('customers.index')
            ->with('success', 'Customer deleted successfully!');
    }
}
