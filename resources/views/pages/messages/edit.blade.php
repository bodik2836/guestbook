@extends('index')

@section('content')
    <form method="post" action="/message/update/{{ $id }}" id="form-messages">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Ім'я</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Ім'я" value="{{ $name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Пошта" value="{{ $email }}">
        </div>
        <div class="form-group">
            <label for="message">Повідомлення</label>
            <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Ваш текст">
                {{ $message }}
            </textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Оновити">
        </div>
    </form>
@endsection
