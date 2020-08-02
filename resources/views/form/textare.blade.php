@extends('layouts.app')

@section('title')
@endsection

@section('code')
&lt;x-form.textarea name="description"&gt;
    Description
&lt;/x-form.textarea&gt;
@endsection
@section('example')
    <x-form.textarea name="description">
        Description
    </x-form.textarea>
@endsection
