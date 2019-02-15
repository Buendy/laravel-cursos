
@extends('layouts.app')

@section('jumbotron')
    @include('partials.jumbotron',[
    'title' => __('app.subscriptions.subscribe'), 'icon' => 'globe'
    ]);
@endsection

@section('content')
@endsection

@push('style')

    <link rel="stylesheet" href="{{asset('css/pricing.css')}}">
@endpush
