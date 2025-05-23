@extends('layouts.app')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">Dashboard</h1>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">my account</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="user-dashboard page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-inline dashboard-menu text-center">
                        <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li><a href="{{ route('dashboard.orders') }}">Orders</a></li>
                        <li><a href="{{ route('dashboard.address') }}">Address</a></li>
                        <li><a class="active" href="{{ route('dashboard.profileDetails') }}">Profile Details</a></li>
                    </ul>

                        <div class="dashboard-wrapper dashboard-user-profile">
                            <div class="media">
                                <div class="pull-left text-center" href="#!">
                                    <img class="media-object user-img" src="{{ asset('assets/web/images/avater.jpg') }}"
                                        alt="Image">
                                    <a href="#x" class="btn btn-transparent mt-20">Change Image</a>
                                </div>
                                <div class="media-body">
                                    <ul class="user-profile-list">
                                        <li><span>Full Name:</span>{{ $user->name }}</li>
                                        {{-- <li><span>Country:</span>USA</li> --}}
                                        <li><span>Email:</span>{{ $user->email }}</li>

                                        <li><span>Phone:</span>{{ $user->phone_no }}</li>
                                        <li><span>Password:</span>******</li>
                                        

                                        {{-- <li><span>Date of Birth:</span>Dec , 22 ,1991</li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </section>
@endsection
