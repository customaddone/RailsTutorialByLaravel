@extends('layouts.layouts')

@section('header')
    @component('components.header')
    @endcomponent
@endsection

@section('main')
    <h1>Listing microposts</h1>
    <table>
        <thead>
            <tr>
                <th>Content</th>
                <th>User</th>
            </tr>
        </thead>
        <tbody>
        @foreach ( $microposts as $micropost )
            <tr>
                <td>{{ $micropost->content }}</td>
                <td>{{ $micropost->userId }}</td>
                <td><a href="/microposts/{{ $micropost->id }}" style="display: inline-block;">
                    Show</a></td>
                <td><a href="/microposts/{{ $micropost->id}}/edit" style="display: inline-block;">
                    Edit</a></td>
                <form action="/microposts/{{ $micropost->id }}" id="form_{{ $micropost->id }}"
                    method="post" style="display:inline">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                <td><a href="#" data-id="{{ $micropost->id }}" onclick="deletePost(this);">delete</a></td>
                </form>
                <script>
                    function deletePost(e) {
                        'use strict';
                        if (confirm('are you sure?')) {
                            document.getElementById('form_' + e.dataset.id).submit();
                        }
                    }
                </script>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br />
    <a href="/microposts/create">New User</a>
@endsection

@section('sidebar')
    @component('components.sidebar')
    @endcomponent
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection
