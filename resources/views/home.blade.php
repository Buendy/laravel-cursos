@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="pl-5 pr-5">
            <div class="row justify-content-center">
                @forelse($courses as $course)
                    <div>
                    @include('partials.courses.card_course')
                    </div>

                @empty
                    <div class="alert alert-dark">
                        {{__('app.home.no_courses')}}
                    </div>


                @endforelse
            </div>
            <div class="row justify-content-center">
                {{$courses->links()}}
            </div>
        </div>
@endsection
