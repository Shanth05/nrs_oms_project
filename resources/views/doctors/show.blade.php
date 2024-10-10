<x-layout>
    <br>
    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

       
        <div class="card mb-4">
            <div class="card-header text-center">
                <h3><strong>{{ $doctor->doctorName }}'s Details</strong></h3> 
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-2"><strong>ID:</strong> {{ $doctor->id }}</div>
                    <div class="col-md-6 mb-2"><strong>Name:</strong> {{ $doctor->doctorName }}</div>
                </div>
            </div>
            <div class="card-footer text-end">
                <a href="{{ url("doctors/{$doctor->id}/edit") }}" class="btn btn-warning">Edit</a>
                <a href="{{ url('doctors') }}" class="btn btn-secondary">Back to Doctor List</a>
            </div>
        </div>

    
        <h1 class="my-3 text-center">Doctor Prescriptions</h1>
        <div class="card mb-4">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Serial No</th>
                            <th>Customer Name</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doctorprescriptions as $doctorprescription)
                            <tr>
                                <td>{{ $doctorprescription->id }}</td>
                                <td>{{ $doctorprescription->date }}</td>
                                <td>{{ $doctorprescription->serialNo }}</td>
                                <td> 
                                    <a href="{{ url("customers/$doctorprescription->customer_id ")}}">
                                        {{ $doctorprescription->customer->full_name }}
                                    </a>      
                                </td>
                                <td>{{ $doctorprescription->Remark }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>  
                <div class="d-flex justify-content-center">
                    {{ $doctorprescriptions->links() }} 
                </div>
            </div>
        </div>

        {{-- <h1 class="my-3 text-center">Customer Details</h1>
        <div class="card mb-4">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->full_name }}</td>
                                <td>{{ $customer->date }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>  
                <div class="d-flex justify-content-center">
                    {{ $customers->links() }} 
                </div>
            </div>
        </div> --}}

        <h1 class="my-3 text-center">Order Details</h1>
        <div class="card mb-4">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Bill No</th>
                            <th>Order No</th>
                            <th>Date</th>
                            <th>Frame Name</th>
                            <th>Color</th>
                            <th>Lense Type</th>
                            <th>Amount</th>
                            <th>Order Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->bill_no }}</td>
                                <td>{{ $order->order_no }}</td>
                                <td>{{ $order->date }}</td>
                                <td>{{ $order->frame_name }}</td>
                                <td>{{ $order->color }}</td>
                                <td>{{ $order->lense_type }}</td>
                                <td>{{ $order->amount }}</td>
                                <td>{{ $order->order_status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>  
                <div class="d-flex justify-content-center">
                    {{ $orders->links() }} 
                </div>
            </div>
        </div>


    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</x-layout>
