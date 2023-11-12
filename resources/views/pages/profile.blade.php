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
                            <img src="https://andit.co/projects/html/and-tour/demo/assets/img/common/dashboard-user.png">
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
                                    <a href="dashboard.html">
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
                                <li>
                                    <a href="my-profile.html" class="act-8n7">
                                        <i class="fa-lfe fa-a6k">
                                        </i>
                                        My
                                        profile
                                    </a>
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
                                    <a href="#!">
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
                                    <div class="col-1rq">
                                        <div class="form-group-egv">
                                            <label for="f-name">
                                                First name
                                            </label>
                                            <input type="text" class="form-control-t3a" id="f-n-sk2"
                                                placeholder="Your Name" value="{{ $user->name }}">
                                        </div>
                                    </div>

                                    <div class="col-1rq">
                                        <div class="form-group-egv">
                                            <label for="mail-address">
                                                Email address
                                            </label>
                                            <input type="text" class="form-control-t3a" id="mai-2ql"
                                                value="{{ $user->email }}">
                                        </div>
                                    </div>
                                    <div class="col-1rq">
                                        <div class="form-group-egv">
                                            <label for="l-name">
                                                Address
                                            </label>
                                            <input type="text" class="form-control-t3a" id="l-n-jkp" value="{{ $user->address }}">
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

                                    <div class="col-1rq">
                                        <div class="form-group-egv field-2t6">
                                            <label for="password">
                                                Password
                                            </label>
                                            <input type="password" class="form-control-t3a" id="pas-3lo" value="cdkdkdd">
                                            <p>
                                                Change password
                                            </p>
                                        </div>
                                    </div>
                                    {{-- <div class="col-1rq">
                                        <div class="form-group-egv">
                                            <label for="u-name">
                                                User name
                                            </label>
                                            <input type="text" class="form-control-t3a" id="u-n-46n" value="sherlyn">
                                        </div>
                                    </div> --}}
                                    <div class="input-1gq">
                                        <h3>
                                            Change password
                                        </h3>
                                        <div class="row-v2a">
                                            <div class="col-1rq">
                                                <div class="form-group-egv">
                                                    <input type="password" class="form-control-t3a"
                                                        placeholder="Old Password">
                                                </div>
                                            </div>
                                            <div class="col-1rq">
                                                <div class="form-group-egv">
                                                    <input type="password" class="form-control-t3a"
                                                        placeholder="New Password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
