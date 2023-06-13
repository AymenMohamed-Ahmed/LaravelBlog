@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h3>{{ __('Welcome to your Dashboard') }}</h3>
                        <p>{{ __('You are logged in!') }}</p>
                    </div>

                    <a href="{{ route('posts.index') }}" class="btn btn-primary">{{ __('View Posts') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
