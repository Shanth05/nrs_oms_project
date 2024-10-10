<x-layout>
    <div class="container">
        <h1 class="text-center">Doctor's List</h1>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    
        <div class="d-flex justify-content-end"> 
            <a href="{{ url('doctors/create') }}" class="btn btn-primary">Add New Doctor</a>
        </div>
        
        <h5>Total Doctors ({{ $doctors->total() }})</h5>
        
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="col-1 text-center">ID</th>
                    <th class="col-3 text-left">Doctor Name</th>
                    <th class="col-2 text-left">Short Name</th>
                    <th class="col-2 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($doctors as $doctor)
                    <tr>
                        <td class="text-center">{{ $doctor->id }}</td>
                        <td class="text-left">
                            <a href="{{ url("doctors/{$doctor->id}") }}">
                                {{ $doctor->doctorName }}
                            </a>
                        </td>
                        <td class="text-left">
                            @if ($doctor->short_name === null)
                                <div class="alert alert-danger mb-0" style="max-width: 100px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">No Data!</div>
                            @else
                                {{ $doctor->short_name }}
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{ url("doctors/{$doctor->id}") }}" class="btn btn-sm btn-info mx-1" title="View Doctor">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ url("doctors/{$doctor->id}/edit") }}" class="btn btn-sm btn-warning mx-1" title="Edit Doctor">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ url("doctors/{$doctor->id}") }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger mx-1" title="Delete Doctor" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="d-flex justify-content-center">
            {{ $doctors->links() }}
        </div>
    </div>
</x-layout>
