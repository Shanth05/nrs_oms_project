<x-layout>

<div class="container-fluid">
    <h1 class="my-3 text-center">Add New Customer</h1>

    <div class="card">
        <div class="card-header text-center">
            <strong>Add New Customer</strong>
        </div>
        <div class="card-body">
            <form action="{{ url('customers') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="title"><strong>Title:</strong></label>
                        <input type="text" name="title" class="form-control" placeholder="Mr, Mrs, Dr, etc." required />
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="fname"><strong>First Name:</strong></label>
                        <input type="text" name="fname" class="form-control" required />
                        @error('fname')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="lname"><strong>Last Name:</strong></label>
                        <input type="text" name="lname" class="form-control" required />
                        @error('lname')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="full_name"><strong>Full Name:</strong></label>
                        <input type="text" name="full_name" class="form-control" placeholder="Enter Full Name" required />
                        @error('full_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="gender"><strong>Gender:</strong></label>
                        <select name="gender" class="form-control" required>
                            <option value="" disabled selected>Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                        @error('gender')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="mobile_no"><strong>Mobile Number:</strong></label>
                        <input type="text" name="mobile_no" class="form-control" required />
                        @error('mobile_no')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="date_of_birth"><strong>Date of Birth:</strong></label>
                        <input type="date" name="date_of_birth" class="form-control" required />
                        @error('date_of_birth')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="age"><strong>Age:</strong></label>
                        <input type="text" name="age" class="form-control" required/>
                        @error('age')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="nic_no"><strong>NIC Number:</strong></label>
                        <input type="text" name="nic_no" class="form-control" required />
                        @error('nic_no')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="address"><strong>Address:</strong></label>
                        <input type="text" name="address" class="form-control" required />
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-success">Save Customer</button>
                    <a href="{{ url('customers') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
</x-layout>