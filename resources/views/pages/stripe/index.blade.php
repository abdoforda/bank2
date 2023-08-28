<form action="{{ route('stripe.checkout', app()->getLocale()) }}" method="post">
@csrf
<input type="submit" value="checkout">
</form>