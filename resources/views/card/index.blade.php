@extends('layouts.app')

@section('title')
    Card
@endsection

@section('example')
    <x-card title="Hello world" class=" card-primary">
        <x-slot name="tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-plus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </x-slot>

        This is the body

        <x-slot name="footer">
            This is the footer
        </x-slot>
    </x-card>
@endsection


@section('code')
&lt;x-card title="Hello world" class="collapsed-card card-primary"&gt;
    &lt;x-slot name="tools"&gt;
        &lt;button type="button" class="btn btn-tool" data-card-widget="collapse"&gt;
            &lt;i class="fas fa-plus"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button type="button" class="btn btn-tool" data-card-widget="remove"&gt;
            &lt;i class="fas fa-times"&gt;&lt;/i&gt;
        &lt;/button&gt;
    &lt;/x-slot&gt;

    This is the body

    &lt;x-slot name="footer"&gt;
        This is the footer
    &lt;/x-slot&gt;
&lt;/x-card&gt;
@endsection

