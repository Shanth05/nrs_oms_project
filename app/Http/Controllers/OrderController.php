<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order; 
use App\Models\Customer;
use App\Models\Doctor;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::paginate(20);
     
        // $customers = Customer::paginate(20);
        
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::paginate(20);  
        return view('orders.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'bill_no' => 'required|string|max:25',
            'order_no' => 'required|string|max:25',
            'date' => 'required|date',
            'customer_id' => 'required|integer|exists:customers,id',
            'amount' => 'required|numeric',
            'advance' => 'nullable|numeric',
            'balance' => 'nullable|numeric',
        ]);

        Order::create($request->all());
        return redirect()->route('orders.index')->with('success', 'Order detail created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $orders = Order::findOrFail($id);
        return view('orders.show', compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $orderDetail = Order::findOrFail($id);
        $customers = Customer::all();
        return view('orders.edit', compact('order', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'bill_no' => 'required|string|max:25',
            'order_no' => 'required|string|max:25',
            'date' => 'required|date',
            'customer_id' => 'required|integer|exists:customers,id',
            'amount' => 'required|numeric',
            'advance' => 'nullable|numeric',
            'balance' => 'nullable|numeric',
        ]);

        $orderDetail = Order::findOrFail($id);
        $orderDetail->update($request->all());
        return redirect()->route('orders.index')->with('success', 'Order detail updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $orderDetail = Order::findOrFail($id);
        $orderDetail->delete();
        return redirect()->route('orders.index')->with('success', 'Order detail deleted successfully.');
    }
}
