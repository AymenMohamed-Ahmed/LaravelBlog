@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Posts') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">{{ __('Create Post') }}</a>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>{{ __('Title') }}</th>
                                    <th>{{ __('Author') }}</th>
                                    <th>{{ __('Date') }}</th>
                                    <th>{{ __('Content') }}</th>
                                    <th>{{ __('Comments') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->author }}</td>
                                        <td>{{ $post->date }}</td>
                                        <td>{{ Str::limit($post->content, 50) }}</td>
                                        <td>{{ $post->comments->count() }}</td>
                                        <td>
                                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-primary">{{ __('View') }}</a>
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-secondary">{{ __('Edit') }}</a>
                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">{{ __('Delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">{{ __('No posts found.') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
