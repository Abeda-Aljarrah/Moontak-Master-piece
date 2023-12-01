@extends('layout.master')
@section('title', 'Profile')

@section('css')
    <link href="{{ asset('CSS/profile.css') }}" rel="stylesheet" />
@endsection

@section('js')
@endsection


@section('content')


    <section class="section-3ng">
        <div class="container-7hc">
            <div class="row-v2a">
                <div class="col-ox5">
                    <div class="sidebar-ooy">
                        <div class="sidebar-aba">
                            <img
                                src="https://media.istockphoto.com/id/1337144146/vector/default-avatar-profile-icon-vector.jpg?s=2048x2048&w=is&k=20&c=X7M3yQkbRq7zIsY16tuaHy8Wu_oo5j-Hp8Uqe7wWxDY=">
                            <h3>
                                {{ $user->name }}
                            </h3>
                            <p>
                                <a href="mailto:{{ $user->email }}">
                                    {{ $user->email }}
                                </a>
                            </p>
                        </div>
                        <div class="menu-oi8">
                            <ul>
                                <li>
                                    <a href="{{ route('profile.edit')}}" class="act-8n7">
                                        <i class="fa-lfe fa-a6k">
                                        </i>
                                        My
                                        profile
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('order')}}">
                                        <i class="fa-lfe fa-htn">
                                        </i>
                                        Order History
                                    </a>
                                </li>
                                <li class="dropdown-ds6">
                                    <i class="fa-lfe card-pg2">
                                    </i>
                                    My Subscription
                                    {{-- <span>
                                        <i class="fa-lfe fa-ase">
                                        </i>
                                    </span>
                                    <div class="sidebar-nge style-dnY6o" id="sho-fmx">
                                        <ul>
                                            <li>
                                                <a href="hotel-booking.html">
                                                    <i class="fa-lfe fa-rm3">
                                                    </i>
                                                    Hotel
                                                    booking
                                                </a>
                                            </li>
                                            <li>
                                                <a href="flight-booking.html">
                                                    <i class="fa-lfe fa-peo">
                                                    </i>
                                                    Flight
                                                    booking
                                                </a>
                                            </li>
                                            <li>
                                                <a href="tour-booking.html">
                                                    <i class="fa-lfe map-y1v">
                                                    </i>
                                                    Tour booking
                                                </a>
                                            </li>
                                            <li>
                                                <a href="booking-history.html">
                                                    <i class="fa-lfe fa-fng">
                                                    </i>
                                                    Booking
                                                    history
                                                </a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </li>

                                {{-- <li>
                                    <a href="dashboard.html">
                                        <i class="fa-lfe fa-fey">
                                        </i>
                                        Wallet
                                    </a>
                                </li>
                                <li>
                                    <a href="notification.html">
                                        <i class="fa-lfe fa-rdr">
                                        </i>
                                        Notifications
                                    </a>
                                </li> --}}
                                <li>
                                    <a href="{{ route('logout') }}">
                                        <i class="fa-lfe fa-dyx">
                                        </i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xd8">
                    <div class="table-ckw">
                        <h3>
                            My Profile
                        </h3>
                        <div>
                            <form id="pro-23m">
                                <div class="row-v2a">
                                    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                        @csrf
                                    </form>
                                    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                                        @csrf
                                        @method('patch')
                                        <div class="col-1rq">
                                            <div class="form-group-egv">
                                                <x-input-label for="name" :value="__('Name')" />
                                                <x-text-input type="text" id="name" name="name"
                                                    class="form-control-t3a" id="f-n-sk2" placeholder="Your Name"
                                                    :value="old('name', $user->name)" required autofocus autocomplete="name" />
                                                <x-input-error class="mt-2" :messages="$errors->get('name')" />

                                            </div>
                                        </div>

                                        <div class="col-1rq">
                                            <div class="form-group-egv">
                                                <x-input-label for="email" :value="__('Email')" />
                                                <x-text-input id="email" name="email" type="email"
                                                    class="form-control-t3a" id="mai-2ql" :value="old('email', $user->email)" required
                                                    autocomplete="username" />
                                                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                                    <div>
                                                        <p class="text-sm mt-2 text-gray-800">
                                                            {{ __('Your email address is unverified.') }}

                                                            <button form="send-verification"
                                                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                {{ __('Click here to re-send the verification email.') }}
                                                            </button>
                                                        </p>

                                                        @if (session('status') === 'verification-link-sent')
                                                            <p class="mt-2 font-medium text-sm text-green-600">
                                                                {{ __('A new verification link has been sent to your email address.') }}
                                                            </p>
                                                        @endif
                                                    </div>
                                                @endif

                                            </div>
                                        </div>

                                        <div class="flex items-center gap-4">
                                            <x-primary-button
                                                style="background-color: #5FA800; color: white; border: none; margin-bottom:20px;">{{ __('Save') }}</x-primary-button>

                                            @if (session('status') === 'profile-updated')
                                                <p x-data="{ show: true }" x-show="show" x-transition
                                                    x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
                                                    {{ __('Saved.') }}</p>
                                            @endif
                                        </div>
                                    </form>

                                    <div class="col-1rq">
                                        <div class="form-group-egv">
                                            <label for="l-name">
                                                Address
                                            </label>
                                            <input type="text" class="form-control-t3a" id="l-n-jkp"
                                                value="{{ $user->address }}">
                                        </div>
                                    </div>
                                    <div class="col-1rq">
                                        <div class="form-group-egv">
                                            <label for="mobil-number">
                                                Mobile number
                                            </label>
                                            <input type="text" class="form-control-t3a" id="mob-1sa"
                                                value="{{ $user->phone }}">
                                        </div>
                                    </div>

                                    {{-- <div class="col-1rq">
                                        <div class="form-group-egv field-2t6">
                                            <label for="password">
                                                Password
                                            </label>
                                            <input type="password" class="form-control-t3a" id="pas-3lo" value="cdkdkdd">
                                            <p>
                                                Change password
                                            </p>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-1rq">
                                        <div class="form-group-egv">
                                            <label for="u-name">
                                                User name
                                            </label>
                                            <input type="text" class="form-control-t3a" id="u-n-46n" value="sherlyn">
                                        </div>
                                    </div> --}}

                                    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                                        @csrf
                                        @method('put')
                                    <div class="input-1gq">
                                        <h3>
                                            Change password
                                        </h3>
                                        <div class="row-v2a">
                                            <div class="col-1rq">
                                                <div class="form-group-egv">
                                                    <x-input-label for="current_password" :value="__('Current Password')" />
                                                    <x-text-input id="current_password" class="form-control-t3a"
                                                        name="current_password" type="password"
                                                        autocomplete="current-password" />
                                                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="col-1rq">
                                                <div class="form-group-egv">
                                                    <x-input-label for="password" :value="__('New Password')" />
                                                    <x-text-input id="password" name="password" type="password"
                                                        class="form-control-t3a" autocomplete="new-password" />
                                                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="col-1rq">
                                                <div class="form-group-egv">
                                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                                    <x-text-input id="password_confirmation" name="password_confirmation"
                                                        type="password" class="form-control-t3a"
                                                        autocomplete="new-password" />
                                                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                                </div>
                                            </div>

                                            <div class="flex items-center gap-4">
                                                <x-primary-button
                                                style="background-color: #5FA800; color: white; border: none; margin-bottom:20px;">{{ __('Save') }}</x-primary-button>
                                                @if (session('status') === 'password-updated')
                                                    <p x-data="{ show: true }" x-show="show" x-transition
                                                        x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
                                                        {{ __('Saved.') }}</p>
                                                @endif
                                            </div>
                                    </div>
                                </form>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <h2 style="padding-left:20%; padding-top:70px ; ">Profile</h2>
    <div class="profile-container">
        <aside class="settings-sidebar">
            <ul class="settings-list">
                <li class="active"><a href="#">Personal Information</a></li>
                <li><a href="#">Address</a></li>
                <li><a href="#">Order History</a></li>
                <li><a href="#">My Subscription</a></li>
            </ul>
        </aside>

        <div class="profile-header">
            <img src="../image/persons/christina-wocintechchat-com-0Zx1bDv5BNY-unsplash.jpg" alt="Profile Picture"
                class="profile-picture">
            <button>Upload</button>
        </div>

        <div>
            <form action="">
                <div class="name">
                    <label for="">Name</label>
                    <input type="text" required>
                </div>
                <div class="email">
                    <label for="">E-mail</label>
                    <input type="email" required>
                </div>
                <div class="phone">
                    <label for="">Phone Number</label>
                    <input type="tel" required>
                </div>
                <div class="pass">
                    <label for="">Password</label>
                    <input type="password" required>
                </div>
                <div class="re-pass">
                    <label for="">Change password</label>
                    <input type="password" required>
                </div>

                <button type="submit" class="save">Save</button>
            </form>
        </div>

    </div> --}}

@endsection

{{--
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
