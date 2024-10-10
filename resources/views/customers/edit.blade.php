<x-layout>
<div class="container-fluid">
    <h1 class="my-3 text-center">Edit Customer</h1>

    <div class="card">
        <div class="card-header text-center">
            <strong>Edit Customer: {{ $customer->full_name }}</strong>
        </div>
        <div class="card-body">
            <form action="{{ url("customers/{$customer->id}") }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="full_name"><strong>Full Name:</strong></label>
                        <input type="text" name="full_name" value="{{ old('full_name', $customer->full_name) }}" class="form-control" required />
                        @error('full_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="gender"><strong>Gender:</strong></label>
                        <select name="gender" class="form-control" required>
                            <option value="Male" {{ $customer->gender == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ $customer->gender == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                        @error('gender')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="mobile_no"><strong>Mobile Number:</strong></label>
                        <input type="text" name="mobile_no" value="{{ old('mobile_no', $customer->mobile_no) }}" class="form-control" required />
                        @error('mobile_no')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="tel_no"><strong>Telephone Number:</strong></label>
                        <input type="text" name="tel_no" value="{{ old('tel_no', $customer->tel_no !== '0' ? $customer->tel_no : '') }}" class="form-control" />
                        @error('tel_no')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-6 mb-2">
                        <label for="date_of_birth"><strong>Date of Birth:</strong></label>
                        <input type="date" name="date_of_birth" value="{{ old('date_of_birth', $customer->date_of_birth) }}" class="form-control" required />
                        @error('date_of_birth')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="age"><strong>Age:</strong></label>
                        <input type="number" name="age" value="{{ old('age', $customer->age) }}" class="form-control" required />
                        @error('age')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="nic_no"><strong>NIC Number:</strong></label>
                        <input type="text" name="nic_no" value="{{ old('nic_no', $customer->nic_no) }}" class="form-control" required />
                        @error('nic_no')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="address"><strong>Address:</strong></label>
                        <input type="text" name="address" value="{{ old('address', $customer->address) }}" class="form-control" required />
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="is_reqular"><strong>Regular Customer:</strong></label>
                        <select name="is_reqular" class="form-control">
                            <option value="1" {{ $customer->is_reqular ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ !$customer->is_reqular ? 'selected' : '' }}>No</option>
                        </select>
                        @error('is_reqular')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success">Save Changes</button>
                    <a href="{{ url('customers/' . $customer->id) }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
</x-layout>
