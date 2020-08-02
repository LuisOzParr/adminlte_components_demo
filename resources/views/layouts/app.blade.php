@extends('adminlte::page')

@section('title', 'Components')

@section('content_header')
    <h1>@yield('title')</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h5>Code:</h5>
            <hr>
            <pre><code class="html">@yield('code')</code></pre>
        </div>
        <div class="col-md-6">
            <h5>Result:</h5>
            <hr>
            @yield('example')
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/solarized-dark.min.css">
    <style>
        pre{
            padding: 0px !important;
        }
    </style>
@stop

@section('js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

@stop
