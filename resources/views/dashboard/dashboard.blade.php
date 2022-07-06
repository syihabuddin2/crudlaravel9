@extends('utils.layouts.main')
@include('utils.layouts.title')
@include('utils.layouts.navbar')
@include('utils.layouts.sidebar')

@section('content')
    <main id="maincontent" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h2>Welcome back, {{ auth()->user()->name }}</h2>
    </main>
@endsection

@section('scripts')
    @include('utils.common.sweetalert')
@endsection
