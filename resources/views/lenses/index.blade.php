<x-layout>
    <div class="container">
        <h1 style="text-align: center">Lenses List</h1>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="d-flex justify-content-end mb-3"> 
            <a href="{{ url('lenses/create') }}" class="btn btn-primary">Add New Lens</a>
        </div>
        
        <h5>Total Lenses ({{ $lenses->total() }})</h5>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center" style="width: 5%;">ID</th>
                    <th class="text-left" style="width: 60%; max-width: 200px;" class="text-truncate">Lens Name</th>
                    <th class="text-center" style="width: 25%;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lenses as $lens)
                    <tr>
                        <td class="text-center">{{ $lens->id }}</td>
                        <td class="text-left" style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            <a href="{{ url("lenses/{$lens->id}") }}">
                                {{ $lens->lense_name }}
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="{{ url("lenses/{$lens->id}/edit") }}" class="btn btn-sm btn-warning mx-1" title="Edit Lens">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ url("lenses/{$lens->id}") }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger mx-1" title="Delete Lens" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $lenses->links() }}
        </div>
    </div>
</x-layout>
