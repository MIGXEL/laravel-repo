@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="container">
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <div class="row">
            @foreach($videos as $video)
                <div class="col-4 my-3">
                    <div class="card av-card" style="width: 18rem;">
                        @if(Storage::disk('images')->has($video->image))
                        <img src="{{url('/miniatura/'.$video->image)}}" class="card-img-top" alt="...">
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
        </div>

        {{ $videos->links() }}
    </div>
</div>
@endsection
