<x-layout>
    <div class="container">
        <h1 style="text-align: center">Doctor Prescription's List</h1>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    
        <div class="d-flex justify-content-end mb-3"> 
            <a href="{{ url('doctorprescriptions/create') }}" class="btn btn-primary">Add New Customer</a>
        </div>
        <h5>Total Customers( {{$doctorprescriptions->total()}} )</h5>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center" style="width: 2%;">ID</th>
                    <th class="text-left"   style="width: 2%;">Serial Number</th>
                    <th class="text-center" style="width: 2%;">Date</th>
                    <th class="text-center" style="width: 2%;">Doctor Name</th>
                    <th class="text-center" style="width: 2%;">Customer Name</th>
                    <th class="text-center" style="width: 2%;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($doctorprescriptions as $doctorprescription)
                    <tr>
                        <td class="text-center">
                                {{ $doctorprescription->id }}
                        </td>
                        <td class="text-left">
                                {{ $doctorprescription->serialNo }}
                            </a>
                        </td>
                        <td class="text-left">
                            <a>{{ $doctorprescription->date }}</a>
                        </td>
                        <td class="text-left">
                            <a href="{{ url("doctors/{$doctorprescription->doctor->id}") }}">
                                {{  $doctorprescription->doctor->doctorName }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ url("customers/$doctorprescription->customer_id ")}}">
                                {{ $doctorprescription->customer->fname }}
                            </a>                       
                        </td>
                        <td class="text-center">
    
                            <a href="{{ url("doctorprescriptions/{$doctorprescription->id}") }}" class="btn btn-sm btn-info mx-1" title="View Customer">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ url("doctorprescriptions/{$doctorprescription->id}/edit") }}" class="btn btn-sm btn-warning mx-1" title="Edit Customer">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ url("doctorprescriptions/{$doctorprescription->id}") }}" method="POST" style="display:inline-block;">
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
            {{ $doctorprescriptions->links() }}
        </div>
    </div>
    </x-layout>
    