<x-layout>
    <div class="container" style="text-align: center">
        <h2 class="mt-4 mb-4">Order Bill's List</h2>
        <h5 style="text-align: left">Total Order Items( {{$orderitems->total()}} )</h5>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Bill Number</th>
                    <th>Order Details ID</th>
                    <th>Order Data ID</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderitems as $orderitem)
                    <tr>
                        <td>{{ $orderitem->id }}</td>
                        <td>{{ $orderitem->bill_no }}</td>
                        <td>{{ $orderitem->order_details_id }}</td>
                        <td>{{ $orderitem->order_data_id }}</td>
                        <td>{{ $orderitem->Description }}</td>
                        <td>{{ $orderitem->Amount }}</td>
                        <td>
                            <a href="{{ url('orderitems/' . $orderitem->id) }}" class="btn btn-info btn-sm"> <i class="fas fa-eye"></i></a>
                            <a href="{{ url('orderitems/' . $orderitem->id . '/edit') }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <form action="{{ url('orderitems/' . $orderitem->id) }}" method="POST" style="display:inline-block;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $orderitems->links() }} 
        </div>
    </div>
</x-layout>
