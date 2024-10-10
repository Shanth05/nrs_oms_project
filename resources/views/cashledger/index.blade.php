<x-layout>
<div class="container" style="text-align: center">
<h1>Cash Ledger</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ url('cashledger/create') }}" class="btn btn-primary">Add New Cash Ledger</a>
    </div>
    <h5  style="text-align: left">Total cashLedgers( {{$cashLedgers->total()}} )</h5>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Reference No</th>
                <th>Bill No</th>
                <th>Order No</th>
                <th>Customer ID</th>
                <th>Credit</th>
                <th>Debit</th>
                <th>Balance</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cashLedgers as $cashLedger)
                <tr>
                    <td>{{ $cashLedger->id }}</td>
                    <td>{{ $cashLedger->reference_no }}</td>
                    <td>{{ $cashLedger->bill_no }}</td>
                    <td>{{ $cashLedger->order_no }}</td>
                    <td>
                        <a href="{{ url('customers/' . $cashLedger->customer_id) }}">
                            {{ $cashLedger->customer_id }}
                        </a>
                    </td>
                    <td>{{ $cashLedger->credit }}</td>
                    <td>{{ $cashLedger->debit }}</td>
                    <td>{{ $cashLedger->balance }}</td>
                    <td>{{ $cashLedger->date }}</td>
                    <td>
                        <a href="{{ url('cashledger/' . $cashLedger->id) }}" class="btn btn-sm btn-info mx-1">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ url('cashledger/' . $cashLedger->id . '/edit') }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>

                        <form action="{{ url('cashledger/' . $cashLedger->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                  <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $cashLedgers->links() }}
    </div>
</div>
</x-layout>
