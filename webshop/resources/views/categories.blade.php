@include('layouts.header')

<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row" style=" background-color: white; padding: 0px;">


            <div class="container">
                <div class="row" style=" background-color: #caf0f8; padding: 50px; ">

                    @foreach($allcategories as $category)
                    <div class="col-sm-4">
                    <img src='{{ url('/storage/'.$category->ImgURL) }}' >
                        <a style="text-decoration: none; color: black;" href="">
                            <div class="bg-primary" style=" border:black; border-style:solid; border-width:thin; margin-bottom:30px; padding: 50px; text-align: center; text-decoration: none; ">{{($category->name)}}</div>

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