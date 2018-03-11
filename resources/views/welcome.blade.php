@extends('layouts.app')

@section('content')

    <div class="container">

        {{--<div class="jumbotron">--}}
            {{--<h1 class="display-4">Hello, world!</h1>--}}
            {{--<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>--}}
            {{--<hr class="my-4">--}}
            {{--<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>--}}
            {{--<p class="lead">--}}
                {{--<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>--}}
            {{--</p>--}}
        {{--</div>--}}

        {{--@include('includes/nav')--}}

        <div class="row">
            <div class="head"></div>

        </div>

        <div class="row mt-5">
            <div class="col-md-12 h-100">

                <div class="col-md-4 sidebar float-left">

                    <div class="col-md-12 box">
                        {{--registrace--}}
                    </div>
                    <div class="col-md-12 mt-4 box">
                        {{--farma--}}
                    </div>
                    {{--<div class="col-md-12 mt-4 box">--}}
                    {{----}}
                    {{--</div>--}}
                    {{--<div class="col-md-12 mt-4 box">statistika</div>--}}


                </div>

                <div class="col-md-8 float-left body">
                    body
                </div>


            </div>
        </div>

    </div>

@endsection
