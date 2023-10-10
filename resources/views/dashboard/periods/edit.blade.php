@extends('dashboard.dashboard_layouts.master')

@section('title','Edit category')


@section('css')
@endsection

@section('title_page1')
Edit

@endsection
@section('title_page2')
Edit Periods
@endsection

@section('content')

<div class="container-fluid">
    <h2>Edit Period Information</h2>

    <form action="{{ route('periods.update', $periods->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="plan_id">Choose plan:</label>
            <select name="plan_id" id="plan_id" class="form-control">
                @foreach ($plans as $plan)
                    <option value="{{ $plan->id }}">{{ $plan->name }}</option>
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




        <button type="submit" class="btn btn-primary">Update</button>
        {{-- <input type="submit" value="Update" class="btn btn-primary"> --}}
    </form>
    </div>
</div>



@endsection

@section('scripts')

@endsection
