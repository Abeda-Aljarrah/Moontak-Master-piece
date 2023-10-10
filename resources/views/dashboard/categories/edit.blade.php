@extends('dashboard.dashboard_layouts.master')

@section('title','Edit category')


@section('css')
@endsection

@section('title_page1')
Edit

@endsection
@section('title_page2')
Edit Category
@endsection

@section('content')

<div class="container-fluid">
    <h2>Edit category Information</h2>

    <form action="{{ route('categories.update', $categories->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Category Name:</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required
                value="{{ old('name', $categories->name) }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Category description:</label>
            <input type="text" name="description" class="form-control " required
                value="{{ old('description', $categories->description) }}">
            {{-- @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror --}}
        </div>
        <div class="form-group">
            <label for="image">Category Image:</label>
            <input type="file" class="form-control" name="image" value="{{ $categories->image }}"  width="100px" height="100px">
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- <div>
            @if ($categories->image)
            <img src="{{ asset('images/' . $categories->image) }}" alt="{{ $categories->name }}" width="200"
                height="200">
        @endif
    </div> --}}


        <button type="submit" class="btn btn-primary">Update</button>
        {{-- <input type="submit" value="Update" class="btn btn-primary"> --}}
    </form>
    </div>
</div>



@endsection

@section('scripts')

@endsection
