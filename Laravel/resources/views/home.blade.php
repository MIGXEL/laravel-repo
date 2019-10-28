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

            <ul class="row" id="videos-list">
                @foreach($videos as $video)
                    <li class="video-item col-md-4">
                        <!--imagen del video-->

                        <div class="data">
                            <h4>{{ $video->title }}</h4>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        {{ $videos->links() }}
    </div>
</div>
@endsection
