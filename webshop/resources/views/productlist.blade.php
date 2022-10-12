@include('layouts.header')

@foreach($allprices as $price)

{{ dd($price->price) }};
@endforeach