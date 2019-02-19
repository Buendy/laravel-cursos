@extends('layouts.app')

@section('jumbotron')
    @include('partials.jumbotron', [
'title' => __('app.subscriptions.admin'),
'icon' => __('list-ol')
])
@endsection

@section('content')

@endsection
