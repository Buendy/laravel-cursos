@auth
    @can('opt_for_course', $course)
        @can('subscribe', \app\Course::class)
            <a href="{{route('subscriptions.class')}}" class="btn btn-subscribe btn-block">
                <i class="fa fa-bolt"></i>{{__('app.courses.subscribe_me')}}
            </a>
        @else
            @can('inscribe', $course)
                <a href="#" class="btn btn-subscribe btn-block">
                    <i class="fa fa-bolt"></i>{{__('app.courses.inscribe_me')}}
                </a>
            @else
                <a href="#" class="btn btn-subscribe btn-block">
                    <i class="fa fa-bolt"></i>{{__('app.courses.inscribe')}}
                </a>
            @endcan
        @endcan
    @else
        <a href="#" class="btn btn-subscribe btn-block">
            <i class="fa fa-user"></i>{{__('app.courses.author')}}
        </a>
    @endcan
@else
    <a href="{{route('login')}}" class="btn btn-subscribe btn-block">
        <i class="fa fa-user"></i>{{__('app.courses.login')}}
    </a>
@endauth
