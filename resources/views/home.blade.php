@extends('template.main')

@section('title','HOME')
@section('page_title', 'HOME')

@section('content')
<div class="pt-3">
    <div  class="container mt-5">
        <div class="d-flex flex-row justify-content-md-start" >
            <img class="logo1" src="{{ asset('pict/logo.png') }}" alt="">
            <h1 id="textarta" class="text-light mb-auto mt-auto">ARTACUS</h1>
        </div>
        <div class="hometext text-light">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quis optio maxime ipsa obcaecati, magnam autem voluptate cumque vero! Ab dignissimos, iste quia sunt fugiat voluptatem maxime cumque autem ullam.</p>
        </div>
        <div>
            <button class="buttonhome text-light">PLAY GAME</button>
        </div>
</div>

</div>
    
@endsection