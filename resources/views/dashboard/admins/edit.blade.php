@extends('dashboard.dashboard_layouts.master')

@section('title','Edit Admin')


@section('css')
@endsection

@section('title_page1')
Edit 

@endsection
@section('title_page2')
Edit Admin
@endsection

@section('content')

<div class="container-fluid">
    <h2>Edit Admin Information</h2>
     
    <form action="{{ route('admins.update', $admins->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required
                value="{{ old('name', $admins->name) }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        {{-- <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror">
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div> --}}
        <div class="form-group">
            <label for="email">ُEmail:</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required
                value="{{ old('email', $admins->email) }}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control " required
                value="{{ old('password', $admins->password) }}">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        {{-- <input type="submit" value="Update" class="btn btn-primary"> --}}
    </form>
    </div>
</div>
        


@endsection

@section('scripts')

@endsection