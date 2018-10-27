@extends('layouts.app')

@section('title')
<title>NSU YEF</title>
@stop

@section('script')

@stop

@section('content')

<div id="homepage">

    <div class="loader flex-center">
        <div class="spinner"></div>
    </div>

    <div id="background"></div>
    <div id="overlay"></div>

    <div class="flex-center position-ref full-height">

        <div class="content">

            <a href="/">
                <img id="logo" src="/images/logo.png" class="rounded mx-auto d-block" alt="">
            </a>

            <div class="title m-b-md">
                Welcome to NSU YEF
            </div>

            <div class="text-center h4">
                REGISTRATION ONGOING
            </div>

            <div class="text-center"> 
                <a href="/ep">
                    <button id="mainbtn" class="skew-button" type="button">
                        <span>EconProdigy 4.0</span>
                    </button>
                </a>
            </div>

        </div>
    </div>

</div>

@stop