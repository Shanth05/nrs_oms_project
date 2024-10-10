<x-layout>
<div class="container">
    <h1 style="text-align: center">Customer's List</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-end mb-3"> 
        <a href="{{ url('customers/create') }}" class="btn btn-primary">Add New Customer</a>
    </div>
    <h5>Total Customers( {{$customers->total()}} )</h5>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th class="text-center" style="width: 5%;">ID</th>
                <th class="text-left" style="width: 26%;">Full Name</th>
                <th class="text-center" style="width: 5%;">Gender</th>
                <th class="text-center" style="width: 10%;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td class="text-center">
                        {{ $customer->id }}
                    </td>
                    <td class="text-left">
                        <a href="{{ url("customers/{$customer->id}") }}">
                            {{ $customer->full_name }}
                        </a>
                    </td>
                    
                    <td class="text-center">{{ $customer->gender }}</td>
                    <td class="text-center">

                        <a href="{{ url("customers/{$customer->id}") }}" class="btn btn-sm btn-info mx-1" title="View Customer">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ url("customers/{$customer->id}/edit") }}" class="btn btn-sm btn-warning mx-1" title="Edit Customer">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ url("customers/{$customer->id}") }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger mx-1" title="Delete Customer" onclick="return confirm('Are you sure?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                        
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    

    <div class="d-flex justify-content-center">
        {{ $customers->links() }}
    </div>
</div>
</x-layout>
