@include('layouts.header')



<section class="py-5">
    <div class="container px-10 px-lg-5 mt-3">

        <div class="col-sm-2 ">


            <!-- <div class="float-align-right "> -->

            <img class="card-img-top;" style="margin-bottom: 25px; margin-left:400px; width:200%; " src="https://www.mountaingoatsoftware.com/uploads/blog/2016-09-06-what-is-a-product.png">
        </div>


        <div class="col-sm-4">
            <div class="bg-primary" style=" border:black; border-style:solid; border-width:thin; margin-bottom:30px; padding: 40px; text-align: center; text-decoration: none; ">
                @foreach ($allprices as $allprice)
                €{{($allprice->price)}},- <br><br>
                @endforeach

                @foreach ($allproducts as $allproduct)
                <strong>{{($allproduct->name)}}</strong> <br> <br>
                {{($allproduct->description)}}
            </div>
            @endforeach

            <strong> Reviews: </strong> <br> <br>
            @foreach ($allreviews as $allreview)
            <div class="bg-primary" style=" border:black; border-style:solid; border-width:thin; margin-bottom:30px; padding: 40px; text-align: center; text-decoration: none; ">{{($allreview->comment)}}</div>
            @endforeach

          
            <button type="button" class="btn btn-info">Toevoegen aan winkelwagen</button>

        </div>
    </div>

    </div>
    </div>
    </body>
</section>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

</html>

@include('layouts.footer')