@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
    </div>
    <div class="row">
    @foreach($videos as $video)
        <div class="col-12 col-sm-6 col-md-4 my-3">
            <div class="card col-sm-12" >
                @if(Storage::disk('images')->has($video->image))
                <img src="{{url('/miniatura/'.$video->image)}}" class="card-img-top mt-3 " alt="...">
                @endif
                <div class="card-body">
                    <h4>{{ $video->title }}</h4>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-info btn-block">ver video</button>
                </div>
            </div>              
        </div>
    @endforeach  
    </div>
{{ $videos->links() }}

</div>
@endsection
