@extends('layouts.dashboard')

@section('content')
    {{-- <ul>
        @foreach ($posts as $post)
            <li><a href="{{ route('admin.posts.show', $post->slug) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul> --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">slug</th>
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
                    <a href="{{ route('admin.posts.show', $post->slug) }}"
                        class="btn btn-info">
                        Details
                    </a>
                    <a href="{{ route('admin.posts.edit', $post->id) }}"
                        class="btn btn-warning">
                        Modify
                    </a>
                    <form class="delete-post-form" style="display: inline" method="post" action="">
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