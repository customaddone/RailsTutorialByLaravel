@extends('layouts.layouts')

@section('header')
    @component('components.header')
    @endcomponent
@endsection

@section('main')
    <h1>Show micropost</h1>
    <p><b>Content</b>: {{ $micropost->content }}</p>
    <p><b>User</b>: {{ $micropost->userId }}</p>
    <a href="/microposts/{{ $micropost->id}}/edit" style="display: inline-block;">Edit</a>
    <span> | </span>
    <a href="/microposts" style="display: inline-block;">Back</a>
@endsection

@section('sidebar')
    @component('components.sidebar')
    @endcomponent
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection
