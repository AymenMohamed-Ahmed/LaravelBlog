@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Post Details') }}</div>

                    <div class="card-body">
                        <h3>{{ $post->title }}</h3>
                        <p><strong>Author:</strong> {{ $post->author }}</p>
                        <p><strong>Content:</strong> {{ $post->content }}</p>
                        <p><strong>Date:</strong> {{ $post->date }}</p>

                        <img src="{{ asset($post->image) }}" alt="Post Image" class="img-fluid">

                        <h4>{{ __('Comments') }}</h4>
                        @forelse ($post->comments as $comment)
                            <div class="comment">
                                <p>{{ $comment->comment }}</p>
                                <p><strong>User:</strong> {{ $comment->user->name }}</p>
                                <p><strong>Date:</strong> {{ $comment->date }}</p>
                                <hr>
                            </div>
                        @empty
                            <p>{{ __('No comments yet.') }}</p>
                        @endforelse

                        <hr>

                        <h4>{{ __('Add a Comment') }}</h4>
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

                        <a href="{{ route('posts.index') }}" class="btn btn-primary mt-3">{{ __('Back') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
