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
                    <p class="mb-5">WORDS SUBMITTING</p>
                    <p>If you're submiting two or more meanings for a word, don't forget to check the "Previous" checkbox!</p>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Direct access to Databases will be removed soon.</strong> All the configrations, updates AND API Calls should come through Vorota&trade; Auth Service with AUTH KEY provided by VRT oAuth2.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 my-auto card p-3">
                    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
                    <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
                    <div class="bootstrap-iso mt-3" style="background-color: transparent">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12" >
                                    <form method="post" action="{{url('submit')}}">
                                        {{ csrf_field() }}
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input"  id="prev_e" name="prev_e">
                                            <label class="form-check-label" for="prev_e">Previous English?</label>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label requiredField" for="english">
                                            English
                                                <span class="asteriskField">
                                                    *
                                                </span>
                                            </label>
                                            <input class="form-control" id="english" name="english" placeholder="English Word" type="text"/>
                                            <span class="help-block" id="hint_english">
                                                Word in English
                                            </span>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input"  id="prev_s" name="prev_s">
                                            <label class="form-check-label" for="prev_s">Previous Sinhala?</label>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label requiredField" for="sinhala">
                                                Sinhala
                                                <span class="asteriskField">
                                                    *
                                                </span>
                                            </label>
                                            <input class="form-control" id="sinhala" name="sinhala" placeholder="Sinhala Word" type="text"/>
                                            <span class="help-block" id="hint_sinhala">
                                                Word in Sinhala - Use Unicode
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <button class="btn btn-primary btn-lg " name="submit" type="submit">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</header>

    @endguest

    @endsection
