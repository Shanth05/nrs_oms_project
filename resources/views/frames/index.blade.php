<x-layout>
    <div class="container">
        <h1 style="text-align: center">Frame List</h1>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="d-flex justify-content-end mb-3"> 
            <a href="{{ url('frames/create') }}" class="btn btn-primary">Add New Frame</a>
        </div>
        
        <h5>Total Frames ({{ $frames->total() }})</h5>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center" style="width: 5%;">ID</th>
                    <th class="text-left" style="width: 30%;">Frame Name</th>
                    <th class="text-center" style="width: 10%;">Frame No</th>
                    <th class="text-center" style="width: 10%;">Selling Price</th>
                    <th class="text-center" style="width: 10%;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($frames as $frame)
                    <tr>
                        <td class="text-center">{{ $frame->id }}</td>
                        <td class="text-left">
                            <a href="{{ url("frames/{$frame->id}") }}">
                                {{ $frame->frame_name }}
                            </a>
                        </td>
                        <td class="text-center">{{ $frame->frame_no }}</td>
                        <td class="text-center">{{ $frame->selling_price }}</td>
                        <td class="text-center">
                            <a href="{{ url("frames/{$frame->id}") }}" class="btn btn-sm btn-info mx-1" title="View Frame">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ url("frames/{$frame->id}/edit") }}" class="btn btn-sm btn-warning mx-1" title="Edit Frame">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ url("frames/{$frame->id}") }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger mx-1" title="Delete Frame" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $frames->links() }}
        </div>
    </div>
</x-layout>
