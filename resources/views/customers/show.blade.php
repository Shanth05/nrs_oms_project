<x-layout>
    <br>
    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="card mb-4">
            <div class="card-header text-center">
                <h3><strong>{{ $customer->full_name }}'s Details</strong></h3> 
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-2"><strong>ID:</strong> {{ $customer->id }}</div>
                    <div class="col-md-6 mb-2"><strong>First Name:</strong> {{ $customer->fname }}</div>
                    <div class="col-md-6 mb-2"><strong>Last Name:</strong> {{ $customer->lname }}</div>
                    <div class="col-md-6 mb-2"><strong>Full Name:</strong> {{ $customer->full_name }}</div>
                    <div class="col-md-6 mb-2"><strong>Gender:</strong> {{ $customer->gender }}</div>
                    <div class="col-md-6 mb-2"><strong>Mobile Number:</strong> {{ $customer->mobile_no }}</div>
                    <div class="col-md-6 mb-2"><strong>Telephone Number:</strong> {{ $customer->tel_no }}</div>
                    <div class="col-md-6 mb-2"><strong>Date of Birth:</strong> {{ $customer->date_of_birth }}</div>
                    <div class="col-md-6 mb-2"><strong>Age:</strong> {{ $customer->age }}</div>
                    <div class="col-md-6 mb-2"><strong>NIC Number:</strong> {{ $customer->nic_no }}</div>
                    <div class="col-md-6 mb-2"><strong>Address:</strong> {{ $customer->address }}</div>
                    <div class="col-md-6 mb-2"><strong>Regular Customer:</strong> {{ $customer->is_reqular ? 'Yes' : 'No' }}</div>
                </div>
            </div>
            <div class="card-footer text-end">
                <a href="{{ url("customers/{$customer->id}/edit") }}" class="btn btn-warning">Edit</a>
                <a href="{{ url('customers') }}" class="btn btn-secondary">Back to Customer List</a>
            </div>
        </div>

        <h1 class="my-3 text-center">Order Details</h1>
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
                @foreach ($customer->orders as $order)
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

        <h1 class="my-3 text-center">Frame Details</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Frame No</th>
                    <th>Frame Name</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Selling Price</th>
                </tr>
            </thead>
            <tbody>
                @if ($customer->frames->isEmpty())
                    <tr>
                        <td colspan="6" class="text-center bg-danger text-white "><h4>No data!</h4></td>
                    </tr>
                @else
                    @foreach ($customer->frames as $frame)
                        <tr>
                            <td>{{ $frame->id }}</td>
                            <td>{{ $frame->frame_no }}</td>
                            <td>{{ $frame->frame_name }}</td>
                            <td>{{ $frame->size }}</td>
                            <td>{{ $frame->colour }}</td>
                            <td>${{($frame->selling_price) }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>            
        </table>

        <h1 class="my-3 text-center">Cash Ledger Details</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Reference No</th>
                    <th>Bill No</th>
                    <th>Order No</th>
                    <th>Credit</th>
                    <th>Debit</th>
                    <th>Balance</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer->cashLedgers as $cashLedger)
                    <tr>
                        <td>{{ $cashLedger->id }}</td>
                        <td>{{ $cashLedger->reference_no }}</td>
                        <td>{{ $cashLedger->bill_no }}</td>
                        <td>{{ $cashLedger->order_no }}</td>
                        <td>{{ $cashLedger->credit }}</td>
                        <td>{{ $cashLedger->debit }}</td>
                        <td>{{ $cashLedger->balance }}</td>
                        <td>{{ $cashLedger->date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</x-layout>
