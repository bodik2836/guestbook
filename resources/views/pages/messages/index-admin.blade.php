@extends('index')

@section('content')

<div class="text-right"><b>Всього повідомлень: </b><i class="badge">{{ $count }}</i></div>
<br>

@include('_common._item-admin')

@endsection
