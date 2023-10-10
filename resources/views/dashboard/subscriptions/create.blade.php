@extends('dashboard.dashboard_layouts.master')

@section('title','Create New plan')


@section('css')
@endsection

@section('title_page1')
Subscriptions
@endsection

@section('title_page2')
Create New Subscription
@endsection

@section('content')


    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('subscriptions.store') }}" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="form-group">
            <label for="user_id">User Name:</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach ($user as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="period_id">Period title:</label>
            <select name="period_id" id="period_id" class="form-control">
                @foreach ($periods as $period)
                    <option value="{{ $period->id }}">{{ $period->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group" >
          <label for="start_date">start_date:</label>
          <input type="date" name="start_date" class="form-control" id="start_date"  placeholder="Enter start_date">
          @error('start_date') <span class="text-danger">{{ $message }}</span>   @enderror
        </div>
        <div class="form-group" >
          <label for="end_date">end_date:</label>
          <input type="date" name="end_date" class="form-control" id="end_date"  placeholder="Enter end_date">
          @error('end_date') <span class="text-danger">{{ $message }}</span>   @enderror
        </div>
        <div class="form-group" >
          <label for="is_active">is_active:</label>
          <input type="text" name="is_active" class="form-control" id="is_active"  placeholder="Enter is_active">
          @error('is_active') <span class="text-danger">{{ $message }}</span>   @enderror
        </div>





        <br>
        <input type="submit" value="Add Subscription" class="btn btn-success"><br>
      </form>






@endsection

@section('scripts')

@endsection
