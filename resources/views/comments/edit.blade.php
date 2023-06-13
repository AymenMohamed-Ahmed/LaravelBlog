@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Comment') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('comments.update', $comment->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="comment">{{ __('Comment') }}</label>
                                <textarea id="comment" class="form-control @error('comment') is-invalid @enderror" name="comment" required>{{ $comment->comment }}</textarea>
                                @error('comment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
