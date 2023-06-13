@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Page Not Found') }}</div>

                    <div class="card-body">
                        <h1>{{ __('404') }}</h1>
                        <p>{{ __('The page you are looking for could not be found.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
