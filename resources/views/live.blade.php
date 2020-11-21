@extends('layouts.app2')
@section('title', $title)
@section('content')

<section class="features3 cid-sgjRpbzzDK" id="features3-r">
    <div class="container text-center">
        <iframe class="mbr-embedded-video w-75" src="https://www.youtube.com/embed/{{$live->link}}?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0" width="1280" height="720" frameborder="0" allowfullscreen></iframe></div>
    </div>
</section>
@endsection