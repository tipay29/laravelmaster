@extends('layout.app')

@section('header')

    <h1>This is Header</h1>

@endsection

@section('content')

    Im from welcome folder, hello view file.

    <br>
    {{$data}}

    <br>
    <ul>
    @foreach($users as $user)
        <li>{{$user}}</li>
    @endforeach
    </ul>

    <br>

    @if($users[0] == 'aw1')
        Name match!
    @else
        Name not match!
    @endif

    <br>
@endsection

@section('script')

    <script>

        alert('Hello!');

    </script>

@endsection


