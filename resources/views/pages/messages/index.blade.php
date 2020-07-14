@extends('index')

@section('content')

@include('_common._form')

<div class="text-right"><b>Всього повідомлень: </b><i class="badge">{{ $count }}</i></div>
<br>

@include('_common._item')

@endsection
