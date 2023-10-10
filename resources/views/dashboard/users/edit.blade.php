{{-- @extends('dashboard.dashboard_layouts.master')

@section('title','Edit User')


@section('css')
@endsection

@section('title_page1')
Edit 

@endsection
@section('title_page2')
Edit User
@endsection

@section('content')

<div class="container-fluid">
    <h2>Edit User Information</h2>
     
    <form action="{{ route('users.update', $users->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">User Name:</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required
                value="{{ old('name', $users->name) }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">User Email:</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required
                value="{{ old('email', $users->email) }}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">User Password:</label>
            <input type="password" name="password" class="form-control " required
                value="{{ old('password', $users->password) }}">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="mobile">User mobile:</label>
            <input type="text" name="mobile" class="form-control " required
                value="{{ old('mobile', $users->mobile) }}">
            @error('mobile')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="address">User address:</label>
            <input type="text" name="address" class="form-control " required
                value="{{ old('address', $users->address) }}">
            @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        
    </form>
    </div>
</div>
        


@endsection

@section('scripts')

@endsection --}}