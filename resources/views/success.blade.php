@extends('layouts.land')
@section('content')
@guest
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-7 my-auto">
                <div class="header-content mx-auto">
                <h1 class="mb-2"><b><small>ICT Glossary</small></b><br> MASTER</h1>
                <p class="mb-5">You need to login before accessing master content</p>
                <a href="{{ route('login') }}" class="btn btn-outline btn-xl js-scroll-trigger mr-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-light btn-xl js-scroll-trigger">Register (Limited Time)</a>
                </div>
            </div>
        </div>
    </div>
</header>
@else
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 ">
            <div class="col-lg-5 my-auto">
                <div class="header-content mx-auto">
                <h1 class="mb-2"><b><small>ICT Glossary</small></b><br> MASTER</h1>
                <p class="mb-5">SUMBIT SUCCESS</p>
                </div>
            </div>
            <div class="col-lg-7 my-auto p-3">
                <div class="card bg-transparent">
                    <div class="card-body">
                        <h3>Submitted Word : {{$data->word}} - {{$data->sinhala}}</h3>
                    <h4>{{$data->desc}}</h4>
                        <p>Word Number {{$data->id}} <i>by {{Auth::user()->name}}</i></p>
                    </div>
                    <div class="card-footer">
                        <a href="/master" class="btn btn-outline">SUBMIT ANOTHER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

    @endguest

    @endsection
