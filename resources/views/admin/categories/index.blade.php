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
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <th scope="row">{{ $category['id'] }}</th>
                <td>{{ $category['name'] }}</td>
                <td>{{ $category['slug'] }}</td>
                <td>
                    <a href="{{ route('admin.categories.show', $category->id) }}"
                        class="btn btn-info">
                        Details
                    </a>
                    <a href=""
                        class="btn btn-warning">
                        Modify
                    </a>
                    <form class="delete-post-form delete-post" style="display: inline" method="post" action="">
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