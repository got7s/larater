@extends('layouts.app')

@section('content')
    <h1>Mensaje id: {{ $message->id }}</h1>

    <img src="{{ $message->image }}" alt="">

    <p>{{ $message->content }}</p>


@endsection