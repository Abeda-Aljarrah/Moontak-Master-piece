@extends('layout.master')
@section('title', 'Profile')

@section('css')
    <link href="{{ asset('CSS/order.css') }}" rel="stylesheet" />
@endsection

@section('js')
@endsection


@section('content')
<section class="section-ebo">
    <div class="container-3a7">
      <div class="row-o7b">
        <div class="col-dpm">
          <div class="sidebar-dla">
            <div class="sidebar-aaw">
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
            <div class="menu-5ym">
              <ul>
                <li>
                  <a href="{{ route('profile.edit')}}" >
                    <i class="fa-r82 fa-el7">
                    </i>
                    My Profile
                  </a>
                </li>
                <li>
                  <a href="{{ route('order')}}" class="act-pyo">
                    <i class="fa-r82 fa-g4s" >
                    </i>
                    Order History
                  </a>
                </li>
                <li>
                  <a href="wallet.html">
                    <i class="fa-r82 card-hfw">
                    </i>
                    Subscription
                  </a>
                </li>
                <li>
                  <a href="{{ route('logout') }}">
                    <i class="fa-r82 fa-onf">
                    </i>
                    Logout
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-8qy">
          {{-- <div class="main-byg">
            <div class="row-o7b">
              <div class="col-4t7">
                <div class="box-xkr">
                  <div class="icon-g2w">
                    <i class="fa-r82 fa-wxh">
                    </i>
                  </div>
                  <div class="text-al5">
                    <h3>
                      Total bookings
                    </h3>
                    <h1>
                      231
                    </h1>
                  </div>
                </div>
              </div>
              <div class="col-4t7">
                <div class="box-xkr">
                  <div class="icon-g2w">
                    <i class="fa-r82 fa-hnv">
                    </i>
                  </div>
                  <div class="text-al5">
                    <h3>
                      Pending bookings
                    </h3>
                    <h1>
                      23
                    </h1>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
          <div class="table-h43">
            <h3>
              My orders
            </h3>
            <div class="table-bzp">
              <table class="table-jqp">
                <thead>
                  <tr>
                    <th>
                      Sl no.
                    </th>
                    <th>
                      Order total
                    </th>
                    <th>
                      Order fees
                    </th>
                    <th>
                      Order amout
                    </th>
                    <th>
                      Created time
                    </th>
                    <th>
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order )

                    <tr>
                      <td>
                        {{ $order->id }}
                      </td>
                      <td>
                        {{ $order->sub_total }}
                      </td>
                      <td>
                        {{ $order->sub_fee }}
                      </td>
                      <td>
                        {{ $order->total_price }}
                      </td>
                      <td class="com-lpj">
                        {{ $order->created_at }}
                      </td>
                      <td>
                        <i class="fa-r82 fa-b5v">
                        </i>
                      </td>
                    </tr>
                    @endforeach
                  {{-- <tr>
                    <td>
                      02.
                    </td>
                    <td>
                      #JK589V80
                    </td>
                    <td>
                      Hotel
                    </td>
                    <td>
                      $754.00
                    </td>
                    <td class="com-lpj">
                      Completed
                    </td>
                    <td>
                      <i class="fa-r82 fa-b5v">
                      </i>
                    </td>
                  </tr> --}}

                </tbody>
              </table>
            </div>
          </div>
          {{-- <div class="pagination-6jt">
            <ul class="pagination-mh4">
              <li class="item-soz">
                <a class="link-n5e" href="#">
                  <span>
                    «
                  </span>
                  <span class="sr-4ip">
                    Previous
                  </span>
                </a>
              </li>
              <li class="item-soz">
                <a class="link-n5e" href="#">
                  1
                </a>
              </li>
              <li class="item-soz">
                <a class="link-n5e" href="#">
                  2
                </a>
              </li>
              <li class="item-soz">
                <a class="link-n5e" href="#">
                  3
                </a>
              </li>
              <li class="item-soz">
                <a class="link-n5e" href="#">
                  <span>
                    »
                  </span>
                  <span class="sr-4ip">
                    Next
                  </span>
                </a>
              </li>
            </ul>
          </div> --}}
        </div>
      </div>
    </div>
  </section>

@endsection
