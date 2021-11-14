@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Creazione nuovo post</h1>
            <form action="{{ route('admin.posts.store') }}" method="post">
                @csrf
                @method('POST')
                
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Contenuto</label>
                    <textarea class="form-control" name="content" id="content"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Crea post</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection