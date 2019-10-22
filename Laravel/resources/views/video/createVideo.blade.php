@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-sm-12 col-md-6">
            <h1 class="title m-b-md">Subir video</h1>
            <hr>
            <form action="{{ route('saveVideo') }}" method="post" enctype="multipart/form-data">
            @csrf

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="description">Descripcion</label>
                    <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Titulo</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="video">Titulo</label>
                    <input type="file" name="video" id="video" class="form-control">
                </div>

                <button type="submit" class="btn btn-info">Crear Video</button>
            </form>
        </div>
    </div>
</div>
@endsection