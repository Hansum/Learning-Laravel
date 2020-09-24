@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/freecodecamplogo.svg" alt="freecodecamp logo">
        </div>
        <div class="col-9 pt-5">
            <div class=""><h1>FreeCodeCamp</h1></div>
            <div class="d-flex pt-2">
                <div class="pr-5"><strong>122</strong>Post</div>
                <div class="pr-5"><strong>332</strong>Follower</div>
                <div class=""><strong>122</strong>Following</div>
            </div>
        <div class="pt-4"><strong>{{Auth::user()->username ?? "Free Code Camp"}}</strong></div>
            <p class="pt-2">{{Auth::user()->username ?? "Free Code Camp"}}'s Instagram profile</p>
        </div>
        <div class="row pt-4">
            <div class="col-4">
                <img src="https://source.unsplash.com/random" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://source.unsplash.com/daily" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://source.unsplash.com/random" class="w-100">
            </div>
        </div>
    </div>
</div>
@endsection
