@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            {{ config('app.name', 'DevMeetup') }}
        </div>

        <div class="links">
            @foreach ($links as $link)
            <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
            @endforeach
        </div>
    </div>
</div>
@endsection
        