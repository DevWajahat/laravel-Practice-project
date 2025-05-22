@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="list-group">

            @foreach (auth()->user()->notifications as $notification)
                <a href="" class="list-group-item list-group-item-action flex-column align-items-start ">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $notification->type }}</h5>
                        <h5 class="mb-1"></h5>
                    </div>
                    @if ($notification->type == 'Registered')
                    <p class="mb-1">
                        {{ $notification->data['message'] }}
                    </p>
                    @elseif ($notification->type == 'Orders')

                    <ul>
                        <li>{{ $notification->data['id'] }}</li>
                        <li>{{ $notification->data['full_name'] }}</li>
                        <li>{{ $notification->data['address'] }}</li>
                        <li>{{ $notification->data['zip_code'] }}</li>
                        <li>{{ $notification->data['city'] }}</li>
                        <li>{{ $notification->data['country'] }}</li>
                        <li>{{ $notification->data['status'] }}</li>
                        <li>{{ $notification->data['created_at'] }}</li>
                    </ul>
                    @endif
                    <small>Donec id elit non mi porta.</small>
                </a>
            @endforeach
        </div>
        </ul>
    </div>
@endsection
