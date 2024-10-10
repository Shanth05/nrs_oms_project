<x-layout>
    <div class="container">
        <h1 class="text-center">Frame Details</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-3">
            <a href="{{ url('frames') }}" class="btn btn-secondary">Back to Frames List</a>
            <a href="{{ url("frames/{$frame->id}/edit") }}" class="btn btn-warning">Edit Frame</a>

            <form action="{{ url("frames/{$frame->id}") }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete Frame</button>
            </form>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Frame Info</h5>
                        <p><strong>Frame No:</strong> {{ $frame->frame_no }}</p>
                        <p><strong>Frame Name:</strong> {{ $frame->frame_name }}</p>
                        <p><strong>Size:</strong> {{ $frame->size }}</p>
                        <p><strong>Color:</strong> {{ $frame->colour }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="card-title">Pricing & Status</h5>
                        <p><strong>Selling Price:</strong> ${{ number_format($frame->selling_price, 2) }}</p>
                        <p><strong>On Hold:</strong> {{ $frame->on_hold }}</p>
                        <p><strong>On Sold:</strong> {{ $frame->on_sold }}</p>
                        <p><strong>On Purchase:</strong> {{ $frame->on_purchase }}</p>
                        <p><strong>Created At:</strong> {{ $frame->created_at }}</p>
                        <p><strong>Updated At:</strong> {{ $frame->updated_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
