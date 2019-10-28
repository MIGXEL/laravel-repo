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
                <div class="col-4">
                    @foreach($videos as $video)
                    <div class="card" style="width: 18rem;">
                        @if(Storage::disk('images')->has($video->image))
                        <img src="{{url('/miniatura/'.$video->image)}}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h4>{{ $video->title }}</h4>
                        </div>
                    </div>
                    @endforeach                
                </div>
            </div>
        </div>

        {{ $videos->links() }}
    </div>
</div>
@endsection
