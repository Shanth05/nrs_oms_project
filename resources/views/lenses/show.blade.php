<x-layout>
    <div class="container">
        <h1 style="text-align: center">Lense's Details</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-3">
            <a href="{{ url('lenses') }}" class="btn btn-secondary">Back to Lenses List</a>
            <a href="{{ url("lenses/{$lense->id}/edit") }}" class="btn btn-warning">Edit Lense</a>

            <form action="{{ url("lenses/{$lense->id}") }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete Lense</button>
            </form>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Lense Name: {{ $lense->lense_name }}</h5>
                <p><strong>Created At:</strong> {{ $lense->created_at }}</p>
                <p><strong>Updated At:</strong> {{ $lense->updated_at }}</p>
            </div>
        </div>
    </div>
</x-layout>
