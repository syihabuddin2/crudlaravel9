@extends('utils.layouts.main')
@include('utils.layouts.title')
@include('utils.layouts.navbar')

@section('content')
    <h1><?= $name ?></h1>
    <h1><?= $email ?></h1>
    <img src="assets/{{ $image }}" alt="{{ $name }}" width="200">
@endsection
