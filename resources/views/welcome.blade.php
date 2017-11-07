@extends('layouts.app')


@section('content')
<div class="jumbotron text-center">
    <h1>Laratter</h1>
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="/" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="/about" class="nav-link">Acerca de nosotross</a>
            </li>
        </ul>
    </nav>
</div>

<div class="row">
    <form action="/message/create" method="post">
        <div class="form-group">
           {{ csrf_field() }}
            <input type="text" name="message" class="form-control" placeholder="Que estas pensando?">
           
           @if ($errors->any())
           @foreach ($errors->get('message') as $error)

           <div class="bg-danger"> {{ $error }}</div>
           @endforeach
           @endif
        </div>
    </form>
</div>

<div class="row">
    @forelse ($messages as $message)
    <div class="col-md-6">
        <img class="img-thumbnail" src="{{ $message->image }}">
        <p class="card-text">
           {{$message->content}}
           <a href="/message/{{$message->id}}">Leer más</a>
        </p>
    </div>
    @empty <p>No hay mensages destacados</p>
    @endforelse
</div>
@endsection