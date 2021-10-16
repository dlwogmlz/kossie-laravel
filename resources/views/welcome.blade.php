@extends('layout')

@section('title')
    Welcome
@endsection

@section('content')
    Welcome
    <ul>
        @foreach($stations as $station)
        <li>{{ $station }}</li>
        @endforeach    
    </ul>
@endsection
