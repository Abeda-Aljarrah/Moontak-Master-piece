@extends('dashboard.dashboard_layouts.master')

@section('title','Create New Category')


@section('css')
@endsection

@section('title_page1')
Periods
@endsection

@section('title_page2')
Create New Period
@endsection

@section('content')


    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('periods.store') }}" enctype="multipart/form-data">
        @csrf
        @method('post')

        <div class="form-group">
            <label for="plan">Choose plan:</label>
            <select name="plan" id="plan" class="form-control">
                @foreach ($planNames as $planName)
                    <option value="{{ $planName->id }}">{{ $planName->name }}</option>
                @endforeach
            </select>
            {{-- <input type="hidden" value="{{ $categoryName->id }}"name="category_id"> --}}
        </div>

        <div class="form-group" >
          <label for="title">Period title:</label>
          <input type="text" name="title" class="form-control" id="title"  placeholder="Enter Period title">
          @error('title') <span class="text-danger">{{ $message }}</span>   @enderror
        </div>
        <div class="form-group" >
          <label for="price">Period price:</label>
          <input type="text" name="price" class="form-control" id="price"  placeholder="Enter Period price">
          @error('price') <span class="text-danger">{{ $message }}</span>   @enderror
        </div>

        <br>
        <input type="submit" value="Add Period" class="btn btn-success"><br>
      </form>






@endsection

@section('scripts')

@endsection
