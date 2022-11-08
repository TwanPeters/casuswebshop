@include('layouts.header')
<section class="py-5">
    <!DOCTYPE html>
    <html lang="en">


    <!--Main layout-->
    <main class="mt-5 pt-4">
        <div class="container dark-grey-text mt-5">

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <img src="https://www.mountaingoatsoftware.com/uploads/blog/2016-09-06-what-is-a-product.png" class="img-fluid" alt="">

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Content-->
                    <div class="p-4">

                        <p class="lead">
                            @foreach ($allprices as $allprice)

                            <span>€{{($allprice->price)}}</span>
                            @endforeach
                        </p>

                        <p class="lead font-weight-bold">Beschrijving</p>
                        @foreach ($allproducts as $allproduct)
                        {{($allproduct->description)}}
                        @endforeach
                        <form class="d-flex justify-content-left">
                            <!-- Default input -->
                            <button class="btn btn-primary btn-md my-0 p" type="submit">Toevoegen aan winkelwagen
                                <i class="fas fa-shopping-cart ml-1"></i>
                            </button>

                        </form>

                    </div>
                    <!--Content-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr>

            <!--Grid row-->
            <div class="row d-flex justify-content-center wow fadeIn">
                <div class="col-sm-4">
                    <strong> Reviews: </strong> <br> <br>
                    @foreach ($allreviews as $allreview)
                    <div class="bg-primary" style=" border:black; border-style:solid; border-width:thin; margin-bottom:10px; padding: 20px; text-align: center; text-decoration: none; ">{{($allreview->comment)}}</div>
                    @endforeach
                    </body>

    </html>

    </body>
</section>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

</html>

@include('layouts.footer')