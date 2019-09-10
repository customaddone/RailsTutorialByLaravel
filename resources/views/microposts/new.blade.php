@extends('layouts.layouts')

@section('header')
    @component('components.header')
    @endcomponent
@endsection

@section('main')
    <h1>New micropost</h1>
    @if (count($errors) > 0)
    <div class="errors">
        <h3>エラーがあります</h3>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <form action="/microposts" method="post">
        <!-- csrf置かないとNo messageが出る-->
        {{ csrf_field() }}
        <p>Content</p><input type="text" name="content" value="{{ old('name') }}">
        <p>User</p><input type="text" name="userId" value="{{ old('email') }}"><br />
        <input type="submit" value="Create Micropost">
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
