<x-layout>
    <div>
        <h1 class="text-center">Order's List</h1>
        <br>
        <h5>Total Orders( {{$orders->total()}} )</h5>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Bill No</th>
                        <th>Order No</th>
                        <th>Order Status</th>
                        <th>Customer Name</th>
                        <th>Doctor Name</th>
                        <th>Frame Name</th>
                        <th>Lense Type</th>
                        <th>Amount</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->bill_no }}</td>
                            <td>{{ $order->order_no }}</td>
                            <td>{{ $order->order_status }}</td>
                            <td> 
                                <a href="{{ url("customers/$order->customer_id") }}">
                                    {{ $order->customer->full_name }}
                                </a>
                            </td>

                            <td>
                                @if ($order->doctor_Name)
                                    <a href="{{ url("doctors/$order->doctor_Id") }}">
                                        {{ $order->doctor_Name }}
                                    </a>
                                @else
                                    <div class="alert alert-danger mb-0">No Data!</div>
                                @endif
                            </td>


                            <td>
                                {!! $order->frame_name ?? '<div class="alert alert-danger mb-0">No Data!</div>' !!}
                            </td>
                            
                            <td>{{ $order->lense_type }}</td>
                            <td>{{ $order->amount }}</td>
                            <td>
                                <a href="{{ url('orders', $order->id) }}" class="btn btn-sm btn-info mx-1">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ url('orders', [$order->id, 'edit']) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ url('orderdetails', $order->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $orders->links() }}
        </div>
    </div>
    </x-layout>
    