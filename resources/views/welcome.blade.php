@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Welcome') }}</div>

                    <div class="card-body">
                        <h1>{{ __('Welcome to the Blog') }}</h1>
                        <p>{{ __('Please login or register to continue.') }}</p>

                        <div class="d-flex justify-content-center mt-4">
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="btn btn-primary mr-2">{{ __('Login') }}</a>
                            @endif

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-secondary">{{ __('Register') }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
