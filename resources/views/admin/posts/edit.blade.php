@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Modifica post</h1>
            <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="content">Contenuto</label>
                    <textarea class="form-control" name="content" id="content">{!! $post->content !!}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Modifica post</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection