@extends('dashboard.dashboard_layouts.master')

@section('title','Create New plan')


@section('css')
@endsection

@section('title_page1')
Plans
@endsection

@section('title_page2')
Create New plan
@endsection

@section('content')


    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('plans.store') }}" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="form-group" >
          <label for="name">Plan Name:</label>
          <input type="text" name="name" class="form-control" id="name"  placeholder="Enter plan name">
          @error('name') <span class="text-danger">{{ $message }}</span>   @enderror
        </div>

        <div class="form-group">
            <label for="image">Plan Image:</label>
            <input type="file"  class="form-control" name="image" required width="100px" height="100px">
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Plan discription:</label>
            <input type="text"  class="form-control" name="description" >
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>



        <br>
        <input type="submit" value="Add Plan" class="btn btn-success"><br>
      </form>






@endsection

@section('scripts')

@endsection
