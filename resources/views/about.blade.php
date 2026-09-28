@extends('layouts.app')

@section('title', 'About')

@section('content')

    <h2>About</h2>

    <p>This website was created for our Week 06 Laravel assessment.</p>

    @if ($showMessage)
        <p>Laravel makes it easier to create organized multi-page websites.</p>
    @endif

@endsection