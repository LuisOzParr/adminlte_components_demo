@extends('layouts.app')

@section('title')
    Dropdown
@endsection

@section('example')
    <x-dropdown title="Options">
        <a class="dropdown-item" href="#">
            <i class="fas fa-edit"></i>
            Edit
        </a>
        <a class="dropdown-item" href="#">
            <i class="fas fa-trash-alt"></i>
            Delete
        </a>
    </x-dropdown>
@endsection

@section('code')
&lt;x-dropdown title="Options"&gt;
    &lt;a class="dropdown-item" href="#"&gt;
        &lt;i class="fas fa-edit"&gt;&lt;/i&gt;
        Edit
    &lt;/a&gt;
    &lt;a class="dropdown-item" href="#"&gt;
        &lt;i class="fas fa-trash-alt"&gt;&lt;/i&gt;
        Delete
    &lt;/a&gt;
&lt;/x-dropdown&gt;
@endsection
