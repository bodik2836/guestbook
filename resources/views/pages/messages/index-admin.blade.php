@extends('index')

@section('content')

@if(session()->has('status'))
    @if(session('status')['type'] == 'success')
        <div class="alert alert-success fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('status')['msg'] }}
        </div>
    @elseif(session('status')['type'] == 'error')
        <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('status')['msg'] }}
        </div>
    @endif
@endif

<div class="text-right"><b>Всього повідомлень: </b><i class="badge">{{ $count }}</i></div>
<br>

@include('_common._item-admin')

@endsection
