@include('layouts.header')
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row" style=" background-color: white; padding: 0px;">


            <div class="container">
                <div class="row" style=" background-color: #caf0f8; padding: 50px; ">
                    @foreach($products as $lproduct)
                    <div class="col-sm-4">
                        <div class="bg-primary" style=" border:black; border-style:solid; border-width:thin; margin-bottom:30px; padding: 50px; text-align: center; text-decoration: none; ">{{ ($lproduct->name) }}</div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')