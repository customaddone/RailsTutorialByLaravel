@extends('layouts.layouts')

@section('header')
    @component('components.header')
    @endcomponent
@endsection

@section('main')
    <h1>New user</h1>
    <form action="/users/create" method="post">
        <p>Name</p><input type="text" name="name">
        <p>Email</p><input type="text" name="email"><br />
        <input type="submit" value="Create User">
    </form>
@endsection

@section('sidebar')
    @component('components.sidebar')
    @endcomponent
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection
