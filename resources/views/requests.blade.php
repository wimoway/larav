@extends('layout')

@section('title-block')Заявка@endsection

@section('content')
    <h1>Оставить заявку</h1>
    <form action="{{ route('request-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="number">Телефон</label>
            <input type="text" name="number" placeholder="Введите номер телефона" id="number" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
        </div>
        <button type="submit" id="submit" class="btn btn-success">Отправить</button>
    </form>
    <h5>Как только наш администратор увидит вашу заявку, он немедленно с вами свяжется)</h5>
@endsection
