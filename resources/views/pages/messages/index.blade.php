@extends('index')

@section('content')

@include('_common._form')

@if(session()->has('status'))
<div class="alert alert-success fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ session('status') }}
</div>
@endif

<div class="text-right"><b>Всього повідомлень: </b><i class="badge">{{ $count }}</i></div>
<br>

@include('_common._item')

@endsection
