@include('layouts.header')

@extends('frontend')

<!-- Section-->

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row" style=" background-color: white; padding: 0px;">


            <div class="container">
                <div class="row" style="background-color: #caf0f8; padding: 50px;">
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white"> Welkom! </h1>
                    <h3 class="text-3xl font-medium text-gray-700">Kies je categorie:</h3>
                    <h5 class="text-2xl font-medium text-gray-700">En zoek naar je favoriete game!</h5>

                        @foreach($allcategories as $category)
                        <div class="col-sm-4">
                            <br>
                            <img class="card-img-top" src="https://wpmudev.com/wp-content/uploads/2011/03/categories-thumb-1470x940.png">
                            <!-- <img src='{{ url('/storage/'.$category->ImgURL) }}'> -->
                            <a style="text-decoration: none; color: black;" href="/categories/{{$category->name}}">
                                <div class="bg-primary" style=" border:black; border-style:solid; border-width:thin; margin-bottom:20px; padding: 20px; text-align: center; text-decoration: none; ">{{($category->name)}}</div>

                            </a>
                        </div>
                        {{--<p>({$category})</p>--}}
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