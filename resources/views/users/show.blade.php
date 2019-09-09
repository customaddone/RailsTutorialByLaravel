@extends('layouts.layouts')

@section('header')
    @component('components.header')
    @endcomponent
@endsection

@section('main')
    <p style="color: #00FF00;">User was successfully created.</p>
    <p><b>Name</b>: {{ $user->name }}</p>
    <p><b>Email</b>: {{ $user->email }}</p>
    <a href="/users/{{ $user->id}}/edit" style="display: inline-block;">Edit</a>
    <span> | </span>
    <a href="/users" style="display: inline-block;">Back</a>
@endsection

@section('sidebar')
    @component('components.sidebar')
    @endcomponent
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection
