<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>NRS Opticals</title>

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-light bg-primary">
        <div class="container text-center">
            <a href="{{ url('/') }}" class="btn btn-primary btn-lg mt-3 {{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ url('doctorprescriptions') }}" class="btn btn-primary btn-lg mt-3 {{ request()->is('doctorprescriptions*') ? 'active' : '' }}">Doctor Prescription</a>
            <a href="{{ url('doctors') }}" class="btn btn-primary btn-lg mt-3 {{ request()->is('doctors*') ? 'active' : '' }}">Doctor</a>
            <a href="{{ url('customers') }}" class="btn btn-primary btn-lg mt-3 {{ request()->is('customers*') ? 'active' : '' }}">Customer</a>
            <a href="{{ url('orders') }}" class="btn btn-primary btn-lg mt-3 {{ request()->is('orders*') ? 'active' : '' }}">Order</a>
            <a href="{{ url('frames') }}" class="btn btn-primary btn-lg mt-3 {{ request()->is('frames*') ? 'active' : '' }}">Frames</a>
            <a href="{{ url('lenses') }}" class="btn btn-primary btn-lg mt-3 {{ request()->is('lenses*') ? 'active' : '' }}">Lenses</a>
            <a href="{{ url('cashledger') }}" class="btn btn-primary btn-lg mt-3 {{ request()->is('cashledger*') ? 'active' : '' }}">Cash Ledger</a>
            <a href="{{ url('orderitem') }}" class="btn btn-primary btn-lg mt-3 {{ request()->is('orderitem*') ? 'active' : '' }}">Order Item</a>
        </div>
    </nav>
    
    
    <div class="container">
        {{$slot}}
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.12.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>


    <!--  Font Awesome Icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</body>
</html>
