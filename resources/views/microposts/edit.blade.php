@extends('layouts.layouts')

@section('header')
    @component('components.header')
    @endcomponent
@endsection

@section('main')
    <h1>Edit microposts</h1>
    <form action="/microposts/{{ $micropost->id }}" method="post">
        {{ csrf_field() }}
        {{ method_field('patch') }}
        <input type="hidden" name="id" value="{{ $micropost->id }}">
        <p>Content</p><input type="text" name="content" value="{{ $micropost->content }}">
        <p>User</p><input type="text" name="userId" value="{{ $micropost->userId }}"><br />
        <input type="submit" value="Update Micropost">
    </form>
    <a href="/microposts/{{ $micropost->id }}" style="display: inline-block;">Show</a>
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
