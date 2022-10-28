@include('layouts.header')

<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row" style=" background-color: white; padding: 0px;">


            <div class="container">
                <div class="row" style="background-color: #caf0f8; padding: 50px;">

                    @foreach($products as $lproduct)


                    <div class="col-sm-4">
                        <img class="card-img-top" src="https://www.mountaingoatsoftware.com/uploads/blog/2016-09-06-what-is-a-product.png">
                        <a style="text-decoration: none; color: black;" href="/{{$lproduct->name}}">

                            <div class="bg-primary" style=" border:black; border-style:solid; border-width:thin; margin-bottom:30px; padding: 40px; text-align: center; text-decoration: none; ">{{($lproduct->name)}}</div>
                        </a>
                        </div>
                    @endforeach
                    @foreach($reviews as $revi)
                <strong>    Review in deze categorie:  </strong> <br> <br>
                    <div class="bg-primary" style=" border:black; border-style:solid; border-width:thin; margin-bottom:30px; padding: 40px; text-align: center; text-decoration: none; ">{{($revi->comment)}}</div>

                    
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>

</html>
@include('layouts.footer')