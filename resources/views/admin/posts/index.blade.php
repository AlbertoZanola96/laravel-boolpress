@extends('layouts.dashboard')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">slug</th>
                <th scope="col">Category</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post['id'] }}</th>
                <td>{{ $post['title'] }}</td>
                <td>{{ $post['slug'] }}</td>
                <td>
                    @if ($post->category)
                        {{ $post->category->name }}
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.posts.show', $post->slug) }}"
                        class="btn btn-info">
                        Details
                    </a>
                    <a href="{{ route('admin.posts.edit', $post->id) }}"
                        class="btn btn-warning">
                        Modify
                    </a>
                    <form class="delete-post-form delete-post" style="display: inline" method="post" action="{{ route('admin.posts.destroy', $post->id) }}">
                        @csrf
                        @method('DELETE')
                        <button  type="submit" class="btn btn-danger ">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection