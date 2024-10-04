
@extends('layout')

@section('content')
    <a href="{{ route('news') }}">Новости</a>
    <a href="{{ route('about') }}">О нас</a>
    <h1>Выберите город</h1>
    <ul>
        @foreach($cities as $city)
            <li>
                <a href="{{ url($city->slug) }}" style="{{ $selectedCity == $city->slug ? 'font-weight: bold;' : '' }}; text-decoration: none; color: black">
                    {{ $city->name }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
