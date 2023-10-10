@extends('dashboard.dashboard_layouts.master')

@section('title','Create New plan')


@section('css')
@endsection

@section('title_page1')
Coupons
@endsection

@section('title_page2')
Create New Coupon
@endsection

@section('content')


    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('coupons.store') }}" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="form-group" >
          <label for="code">Code:</label>
          <input type="text" name="code" class="form-control" id="code"  placeholder="Enter plan Code">
          @error('code') <span class="text-danger">{{ $message }}</span>   @enderror
        </div>
        <div class="form-group" >
          <label for="percent">Code_percent:</label>
          <input type="text" name="percent" class="form-control" id="percent"  placeholder="Enter plan Code_percent">
          @error('percent') <span class="text-danger">{{ $message }}</span>   @enderror
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
        <input type="submit" value="Add Plan" class="btn btn-success"><br>
      </form>






@endsection

@section('scripts')

@endsection
