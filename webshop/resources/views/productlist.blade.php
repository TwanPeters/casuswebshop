@include('layouts.header')

@foreach($product as $price)

<section class="py-5">
    <div class="container px-10 px-lg-5 mt-3">

        <div class="col-sm-2 ">


            <!-- <div class="float-align-right "> -->

            <img class="card-img-top;" style="margin-bottom: 25px; margin-left:400px; width:200%; " src="https://www.mountaingoatsoftware.com/uploads/blog/2016-09-06-what-is-a-product.png">
            <div class="bg-primary" style=" border:black; border-style:solid; border-width:thin; margin-bottom:30px; padding: 90px; padding-left: 50px; padding-bottom: 5px; padding-top: 5px; text-align: center; text-decoration: none; margin-left: 530px;">€{{ ($price->price)}},-</div>
            <button type="button" class="btn btn-info">Toevoegen aan winkelwagen</button>
            @endforeach
        </div>
    </div>
    </div>

</section>


@include('layouts.footer')