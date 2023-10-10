@extends('dashboard.dashboard_layouts.master')

@section('title','Create New User')


@section('css')
@endsection

@section('title_page1')
Users
@endsection

@section('title_page2')
Create New User
@endsection

@section('content')


    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('users.store') }}">
        @csrf
        <div class="form-group" >
          <label for="name">User Name:</label>
          <input type="text" name="name" class="form-control" id="name"  placeholder="Enter user name">
          @error('name') <span class="text-danger">{{ $message }}</span>   @enderror

        </div>

        <div class="form-group">
          <label  for="email">User Email:</label>
          <input type="email" name="email" class="form-control" id="email"  placeholder="Enter user email ">
          @error('email') <span class="text-danger">{{ $message }}</span>   @enderror
        </div>
        <div class="form-group">
          <label  for="mobile">User mobile:</label>
          <input type="text" name="mobile" class="form-control" id="mobile"  placeholder="Enter user mobile ">
          @error('mobile') <span class="text-danger">{{ $message }}</span>   @enderror
        </div>

        <div class="form-group">
          <label  for="address">User address:</label>
          <input type="text" name="address" class="form-control" id="address"  placeholder="Enter user address ">
          @error('address') <span class="text-danger">{{ $message }}</span>   @enderror
        </div>
        <div class="form-group">
          <label  for="address">Role:</label>
          <input type="text" name="role" class="form-control" id="role"  placeholder="Enter role ">
          @error('role') <span class="text-danger">{{ $message }}</span>   @enderror
        </div>
        <div class="form-group">
          <label for="password">User Password:</label>
          <div class="input-group">
              <input type="password" name="password" class="form-control" id="password" placeholder="Enter user password">
              <div class="input-group-append">
                  <button type="button" id="showPassword" class="btn btn-outline-secondary">
                      <i class="fas fa-eye"></i>
                  </button>
              </div>
          </div>
          @error('password') <span class="text-danger">{{ $message }}</span>   @enderror
      </div>


        <br>
        <input type="submit" value="Add User" class="btn btn-success"><br>
      </form>






@endsection

@section('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function () {
      const passwordInput = document.getElementById('password');
      const showPasswordButton = document.getElementById('showPassword');

      showPasswordButton.addEventListener('click', function () {
          if (passwordInput.type === 'password') {
              passwordInput.type = 'text';
          } else {
              passwordInput.type = 'password';
          }
      });
  });
</script>

@endsection
