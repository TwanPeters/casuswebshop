@include('layouts.header')

@foreach($product as $price)

{{ dump($price->price) }};
@endforeach