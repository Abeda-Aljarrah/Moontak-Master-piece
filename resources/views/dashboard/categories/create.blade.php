@extends('dashboard.dashboard_layouts.master')

@section('title','Create New Category')


@section('css')
@endsection

@section('title_page1')
Categories
@endsection

@section('title_page2')
Create New Category
@endsection

@section('content')


    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('categories.store') }}" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="form-group" >
          <label for="name">Category Name:</label>
          <input type="text" name="name" class="form-control" id="name"  placeholder="Enter Category name">
          @error('name')<span class="text-danger">{{ $message }}</span> @enderror


        </div>

        <div class="form-group">
          <label  for="description">Category description:</label>
          <input type="text" name="description" class="form-control" id="description"  placeholder="Enter category description ">
          @error('description')<span class="text-danger">{{ $message }}</span>@enderror

          {{-- @error('email') <span class="text-danger">{{ $message }}</span>   @enderror --}}
        </div>

        <div class="form-group">
            <label for="image">Category Image:</label>
            <input type="file" class="form-control" name="image" required  width="100px" height="100px">
            @error('image')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
        {{-- <div>@if ($category->image)
          <img src="{{ asset('images/' . $category->image) }}" alt="{{ $category->name }}" width="300">
          @endif
        </div> --}}

        <br>
        <input type="submit" value="Add Category" class="btn btn-success"><br>
      </form>






@endsection

@section('scripts')

@endsection
