@include('layouts.header')

@extends('frontend')

@section('content')
    <div class="container px-6 mx-auto">
        <h3 class="text-2xl font-medium text-gray-700">Producten:</h3>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($prices as $price)

            @foreach ($products as $product)
            
            <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                <div class="flex items-end justify-end w-full bg-cover">
                    
                </div>
                <div class="px-5 py-3">
                <strong>    <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3> </strong>
                <strong>    <h3 class="text-gray-700 uppercase">{{ $price->price }}</h3> </strong>

                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $price->price }}" name="price">

                        <input type="hidden" value="1" name="quantity">
                        <img class="card-img-top" src="https://www.mountaingoatsoftware.com/uploads/blog/2016-09-06-what-is-a-product.png">
                        <br>
                        <br>
                        <button class="px-4 py-2 text-white bg-blue-800 rounded">Toevoegen aan de winkelwagen</button>

                        <a class="btn btn-primary" href="/{{$product->name}}" role="button">Informatie</a>                    </form>
                </div>
                
            </div>
            @endforeach
            @endforeach 
            <br>
       

        </div>

    </div>
    <br>
    <br>
    <br>


    <strong style="margin-left: 25px;"> Reviews in deze categorie:  </strong> <br>
    @foreach ($reviews as $review)

  <div class="grid grid-cols-4 gap-4" >
  <div class="bg-primary" style=" border:black; border-style:solid; border-width:thin; margin-left: 25px; margin-bottom:10px; padding: 20px; text-align: center; text-decoration: none; ">{{($review->comment)}}</div>


</div>

            @endforeach
            
    <br><br><br>

    <a href="javascript:history.back()" class="btn btn-primary">Terug</a>
    
    @include('layouts.footer')
@endsection

