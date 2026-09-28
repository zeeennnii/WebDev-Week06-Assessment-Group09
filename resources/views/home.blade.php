@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <h2>Home</h2>

    <p>Welcome to my Laravel multi-page website.</p>

    <x-alert>
        Welcome! This is a reusable Blade component.
    </x-alert>

    <h3>Our Services</h3>

    <ul>
        @foreach ($services as $service)
            <li>{{ $service }}</li>
        @endforeach
    </ul>

@endsection