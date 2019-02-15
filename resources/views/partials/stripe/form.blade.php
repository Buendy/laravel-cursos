<form action="{{route('subscriptions.process_subscription')}}" method="post">
    @csrf
    <input class="form-control" name="coupon" type="text" placeholder="{{__('app.subscriptions.coupon')}}">
    <input type="hidden" name="type" value="{{$product['type']}}">
    <hr>
    <stripe-form
    stripe_key="{{env('STRIPE_KEY')}}"
    name="{{$product['name']}}"
    mount="{{$product['amount']}}"
    description="{{$product}}"
    >

    </stripe-form>
</form>
