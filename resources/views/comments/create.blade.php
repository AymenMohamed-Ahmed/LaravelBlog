@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Comment') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('comments.store') }}">
                            @csrf

                            <input type="hidden" name="post_id" value="{{ $post->id }}">

                            <div class="form-group">
                                <label for="comment">{{ __('Comment') }}</label>
                                <textarea id="comment" class="form-control @error('comment') is-invalid @enderror" name="comment" required>{{ old('comment') }}</textarea>
                                @error('comment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
