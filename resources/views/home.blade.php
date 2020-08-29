@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach($userOnline as $users)
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{$users->name}}</div>

                <div class="card-body">
                    <a href="/message/{{$users->name}}" class="btn btn-primary">Send Message</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection